<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = 'New String';
$this->params['breadcrumbs'][] = ['label' => 'String', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="senar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'merek' => $merek,
    ]) ?>

</div>
