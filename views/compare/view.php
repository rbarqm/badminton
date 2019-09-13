<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\helpers\Url;
//use yii\helpers\VarDumper;
/* @var $this yii\web\View */
/* @var $model app\models\Senar */

$this->title = $model->STRING_BRAND." - ".$model->STRING_NAME;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">
	<div class="senar-view">		
		<?php //Html::a('Back', Url::to(['compare/index']),['data-pjax' => '0']); 
		?>
		<input type="button" class="btn btn-light btn-sm" value="Back" onclick="history.back()">
		<h1><?= Html::encode($this->title) ?></h1>		
		<br>
		<div class="col-md-5">									
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					//'ID',
					[
						'label' => 'Brand',
						'value' => $model->STRING_BRAND,
					],
					[
						'label' => 'Name',
						'value' => $model->STRING_NAME,
					],
					[
						'label' => 'Category',
						'value' => $model->STRING_CATEGORY,
					],
					[
						'label' => 'Feeling',
						'value' => $model->STRING_FEELING,
					],
					[
						'label' => 'Diameter',
						'value' => $model->STRING_DIAMETER." mm",
					],
					[
						'label' => 'Repulsion Power',
						'value' => $model->POINT_REPULSION_POWER." / 10",
					],
					[
						'label' => 'Durability',
						'value' => $model->POINT_DURABILITY." / 10",
					],
					[
						'label' => 'Hitting Sound',
						'value' => $model->POINT_HITTING_SOUND." / 10",
					],
					[
						'label' => 'Shock Absorption',
						'value' => $model->POINT_SHOCK_ABSORPTION." / 10",
					],
					[
						'label' => 'Control',
						'value' => $model->POINT_CONTROL." / 10",
					],
					[
						'label' => 'Price',
						'value' => function($data){
							return "Rp.".number_format($data->AVERAGE_PRICE,0,",",".").",-";							 
						},
					]
				],
			]) ?>
		</div>
		<div class="col-md-4">
			<?= Html::img('@web/picture/'.$model->STRING_BRAND.'.png', ['alt' => 'Brand Logo', 'width' => '400px', 'height' => '100%']);?>
		</div>
	</div>
</div>
