<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Raket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BRAND')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CATEGORY')->dropDownList([ 'SPEED' => 'SPEED', 'CONTROL' => 'CONTROL', 'POWER' => 'POWER', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'WEIGHT')->dropDownList([ 'U' => 'U', '2U' => '2U', '3U' => '3U', '4U' => '4U', '5U' => '5U', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'GRIP')->dropDownList([ 'G3' => 'G3', 'G4' => 'G4', 'G5' => 'G5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'MAX_TENSION')->textInput() ?>

    <?= $form->field($model, 'PRICE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
