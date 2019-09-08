<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Raket */

$this->title = 'Create Raket';
$this->params['breadcrumbs'][] = ['label' => 'Rakets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
