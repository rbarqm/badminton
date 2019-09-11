<?php
/* @var $this yii\web\View */

use kartik\grid\GridView;


$this->title = 'Comparasion and Grading';
?>
<h1>Nilai Sebuah Senar</h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => $gridColumns,		
	]); ?>
