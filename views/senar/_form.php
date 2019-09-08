<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Senar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="senar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'STRING_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STRING_CATEGORY')->dropDownList([ 'DURABILITY' => 'DURABILITY', 'REPULSION_POWER' => 'REPULSION POWER', 'HITTING_SOUND' => 'HITTING SOUND', 'CONTROL' => 'CONTROL', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'STRING_FEELING')->dropDownList([ 'SOFT' => 'SOFT', 'MEDIUM' => 'MEDIUM', 'HARD' => 'HARD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'STRING_DIAMETER')->textInput() ?>

    <?= $form->field($model, 'POINT_REPULSION_POWER')->dropDownList([ '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'POINT_DURABILITY')->dropDownList([ '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'POINT_HITTING_SOUND')->dropDownList([ '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'POINT_SHOCK_ABSORPTION')->dropDownList([ '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'POINT_CONTROL')->dropDownList([ '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'AVERAGE_PRICE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
