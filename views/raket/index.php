<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RaketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rakets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raket-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Raket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'BRAND',
            'NAME',
            //'CATEGORY',
            'WEIGHT',
            'GRIP',
            'MAX_TENSION',
            'PRICE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
