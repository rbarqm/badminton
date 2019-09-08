<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Raket */

$this->title = 'Update Raket: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Rakets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
