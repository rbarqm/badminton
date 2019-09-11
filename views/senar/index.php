<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SenarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Racquet Strings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="senar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New String', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'STRING_NAME',
            'STRING_CATEGORY',
            'STRING_FEELING',
            //'STRING_DIAMETER',
            //'POINT_REPULSION_POWER',
            //'POINT_DURABILITY',
            //'POINT_HITTING_SOUND',
            //'POINT_SHOCK_ABSORPTION',
            //'POINT_CONTROL',
            'AVERAGE_PRICE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
