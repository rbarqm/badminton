<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = 'Create Senar';
$this->params['breadcrumbs'][] = ['label' => 'Senars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="senar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
