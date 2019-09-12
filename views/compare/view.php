<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = $model->STRING_BRAND." - ".$model->STRING_NAME;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">
	<div class="senar-view">
		<?=Html::a('Back', Url::to(['compare/index']),['data-pjax' => '0']); ?>
		<h1><?= Html::encode($this->title) ?></h1>		
		<br>
		<div class="col-md-5">									
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					//'ID',
					'STRING_BRAND',
					'STRING_NAME',
					'STRING_CATEGORY',
					'STRING_FEELING',
					'STRING_DIAMETER',
					'POINT_REPULSION_POWER',
					'POINT_DURABILITY',
					'POINT_HITTING_SOUND',
					'POINT_SHOCK_ABSORPTION',
					'POINT_CONTROL',
					'AVERAGE_PRICE',
				],
			]) ?>
		</div>
	</div>
</div>
