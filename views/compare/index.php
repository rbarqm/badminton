<?php
/* @var $this yii\web\View */

use kartik\grid\GridView;
use yii\bootstrap\Modal;

$this->title = 'Comparison and Grading | Strings';
?>
<h1>Nilai Senar</h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => $gridColumns,		
	]); ?>
	
	<?php
		Modal::begin([
			'header' => 'Detail Senar',
			'id' => 'detail-senar',
			'class' => 'modal fade bd-example-modal-lg',
			'size' => 'modal-lg',
		]);
		echo "<div id='modalContent'></div>";
		Modal::end(); 
	?>
	
	<p>*Harga referensi ke <a href='https://www.sunriseclick.com/shop/badminton-strings/' target='blank'>SunriseClick,<a href='https://shopbadmintononline.com/badminton-string-kason-c-217.html' target='blank'>Li-ning Badminton Store, </a></p>
	<p>*Harga dapat berubah sewaktu-waktu</p>
	<p>*Bobot penilaian adalah: R : 30%, D : 20%, HS: 5%, S: 15%, C: 30%</p>
<?php
/*$js = <<<JS
	$("document").ready(function(){
		$('body').on('click', '#senar-detail', function() {		
			$('#detail-senar').modal('show')
			.find('#modalContent')		
			.load(this.value);
		});
	});
JS;

$js = <<<JS
	$(function () {
        $('#senar-detail).on('click', function () {
            $.ajax({
                type: "POST",
                url: $(this).data('url'),
                data: {'id': $(this).data('product_id')},
                success: function (data) {  
					$('#detail-senar').modal('show').find('#modalContent').html(data);
                }
            });
        });
    });
JS;*/
//$this->registerJs($js, yii\web\View::POS_END);
?>