<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = 'Update String: ' . $model->STRING_BRAND." - ".$model->STRING_NAME;;
$this->params['breadcrumbs'][] = ['label' => 'String', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="senar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'merek' => $merek,
    ]) ?>

</div>
