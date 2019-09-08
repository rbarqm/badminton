<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = $model->STRING_NAME;
$this->params['breadcrumbs'][] = ['label' => 'Senars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="senar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'STRING_NAME',
            'STRING_CATEGORY',
            'STRING_FEELING',
            'STRING_DIAMETER',
            'POINT_REPULSION_POWER',
            'POINT_DURABILITY',
            'POINT_HITTING_SOUND',
            'POINT_SHOCK_ABSORPTION',
            'POINT_CONTROL',
            'AVERAGE_PRICE',
        ],
    ]) ?>

</div>
