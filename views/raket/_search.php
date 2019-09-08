<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RaketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'BRAND') ?>

    <?= $form->field($model, 'NAME') ?>

    <?= $form->field($model, 'CATEGORY') ?>

    <?= $form->field($model, 'WEIGHT') ?>

    <?php // echo $form->field($model, 'GRIP') ?>

    <?php // echo $form->field($model, 'MAX_TENSION') ?>

    <?php // echo $form->field($model, 'PRICE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
