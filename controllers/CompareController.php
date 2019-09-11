<?php

namespace app\controllers;

use Yii;
use app\models\Senar;
use app\models\SenarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\Json;

class CompareController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$dataProvider = $this->actionGrade();
		
		$data = Json::decode($dataProvider, true);
		//echo $data;die();
		
		$dataProvider = new ArrayDataProvider([
			'allModels' => $data,
			'pagination' => [
				'pageSize' => 10,
			],
			'sort' => [
				'attributes' => [
					'name',
					'feel',
					'category',
					'diameter',
					'grade',
					'price'
				],
				'defaultOrder' => [
					'grade' => SORT_DESC,
					'price' => SORT_ASC,
				]
			],
		]);
		
		$gridColumns = [
			[
				'class' => 'yii\grid\SerialColumn',
			],
			[
				'attribute' => 'name',
				'label' => 'Nama Senar',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:left'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],							
			],
			[
				'attribute' => 'feel',
				'label' => 'Feeling',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:left'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],							
			],
			[
				'attribute' => 'category',
				'label' => 'Kategori',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:left'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],							
			],
			[
				'attribute' => 'diameter',
				'label' => 'Diameter',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:right'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],							
			],
			/*[
				'attribute' => 'grade',
				'label' => 'Nilai Senar',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:left'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],							
			],*/
			[								
				'label' => 'Grade',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'color: white;background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:center'],				
				'value' => function($data){
					$nilai = $data['grade'];
					if($nilai >= 90){
						return "A";
					}
					if($nilai < 90 && $nilai >= 85){
						return "B+";
					}
					if($nilai < 85 && $nilai >= 80){
						return "B";
					}
					if($nilai < 80 && $nilai >= 75){
						return "C+";
					}
					if($nilai < 75 && $nilai >= 70){
						return "C";
					}
					
					if($nilai < 70 && $nilai >= 65){
						return "D";
					}
					
					if($nilai < 65 && $nilai >= 60){
						return "E";
					}
					
					if($nilai < 60 ){
						return "F";
					}
				},
			],			
			[
				'attribute' => 'price',
				'label' => 'Harga (dalam Rupiah)',
				'format' => "raw",
				'headerOptions' => [
					'style' => 'background: green;text-align:center;font-weight: bold;',
				],
				'contentOptions' => ['style' => 'text-align:right'],
				'sortLinkOptions' => [
					'style' => 'color: white;',
				],
				//'format' => 'Currency',
				//'attribute' => 'amount',
			],
		];
        return $this->render('index',[
			'dataProvider' => $dataProvider,
			'gridColumns' => $gridColumns,
		]);
    }
	
	public function actionGrade(){		
		$tabel1 = Senar::find()->all();
		
		$bobot_Repulsion = 30;
		$bobot_Durability = 20;
		$bobot_HitSound = 5;
		$bobot_ShockAbs = 15;
		$bobot_Control = 30;
		$data=[];
		
		foreach($tabel1 as $row){
			$nama = $row['STRING_NAME'];
			$feel = $row['STRING_FEELING'];
			$kategori = $row['STRING_CATEGORY'];
			$diameter = $row['STRING_DIAMETER'];
			$repPwr = $row['POINT_REPULSION_POWER'];
			$durable = $row['POINT_DURABILITY'];
			$hitSou = $row['POINT_HITTING_SOUND'];
			$shoAbs = $row['POINT_SHOCK_ABSORPTION'];
			$control = $row['POINT_CONTROL'];
			$harga = $row['AVERAGE_PRICE'];
			
			$tolakan = $repPwr*($bobot_Repulsion/10);
			$ketahanan = $durable*($bobot_Durability/10);
			$suara = $hitSou*($bobot_HitSound/10);
			$redaman = $shoAbs*($bobot_ShockAbs/10);
			$kontrol = $control*($bobot_Control/10);
			$nilai_tot = $tolakan+$ketahanan+$suara+$redaman+$kontrol;
			//$data = [$nama,$feel,$kategori,$diameter,$nilai_tot,$harga];
			
			array_push($data, [
                'name' => $nama,
                'feel' => $feel,
				'category' => $kategori,
				'diameter' => $diameter,
				'grade' => $nilai_tot,
				'price' => $harga
            ]);		
		}
		return json_encode($data);
	}

}
