<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Bulutangkis';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Senar</h2>

                <p>List untuk melihat jenis-jenis senar dari berbagai merek</p>

				<?= 
					Html::button('Senar &raquo;', 
						[
							'id' => 'btn-senar',
							'class' => 'btn btn-default btn-sm', 
							'onclick' => 'window.location.href='."'".Url::to('@web/senar/index')."'",
						]
					); 
				?>
            </div>
            <div class="col-lg-4">
                <h2>Raket</h2>

                <p>Jenis-jenis senar dari berbagai merek terkenal dunia dan buatan lokal Indonesia</p>

                <?= 
					Html::button('Raket &raquo;', 
						[
							'id' => 'btn-raket',
							'class' => 'btn btn-default btn-sm', 
							'onclick' => 'window.location.href='."'".Url::to('@web/raket/index')."'",
						]
					); 
				?>
            </div>
            <div class="col-lg-4">
                <h2>Komparasi Senar</h2>

                <p>Lihat senar terbaik untukmu bermain</p>

                <?= 
					Html::button('Komparasi &raquo;', 
						[
							'id' => 'btn-compare',
							'class' => 'btn btn-default btn-sm', 
							'onclick' => 'window.location.href='."'".Url::to('@web/compare/index')."'",
						]
					); 
				?>
            </div>
        </div>

    </div>
</div>
