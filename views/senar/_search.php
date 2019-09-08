<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SenarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="senar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'STRING_NAME') ?>

    <?= $form->field($model, 'STRING_CATEGORY') ?>

    <?= $form->field($model, 'STRING_FEELING') ?>

    <?= $form->field($model, 'STRING_DIAMETER') ?>

    <?php // echo $form->field($model, 'POINT_REPULSION_POWER') ?>

    <?php // echo $form->field($model, 'POINT_DURABILITY') ?>

    <?php // echo $form->field($model, 'POINT_HITTING_SOUND') ?>

    <?php // echo $form->field($model, 'POINT_SHOCK_ABSORPTION') ?>

    <?php // echo $form->field($model, 'POINT_CONTROL') ?>

    <?php // echo $form->field($model, 'AVERAGE_PRICE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
