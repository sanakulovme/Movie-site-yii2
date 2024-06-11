<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Kinolar;
use frontend\models\Janr;
use frontend\models\Catalog;
use yii\data\ActiveDataProvider;


class CatalogController extends Controller
{
	public function actionIndex($name = false)
	{
		if (isset($_GET)) {
			$where = [];

			if(isset($_GET['genre']) && $_GET['genre'] != 'All')
			{
				$janr = Janr::find()->where(['title' => $_GET['genre']])->one();

				if(!empty($janr)){
					$where['janr_id'] = $janr['id'];
				}else{
					$where['janr_id'] = 1;
				}
			}

			if(isset($_GET['quality']))
			{
				$where['format'] = $_GET['quality'];
			}

			if(isset($_GET['year']))
			{
				$where['year'] = $_GET['year'];
			}
		}

		if ($name) {
			$data = Catalog::find()->where(['title' => $name])->one();
			if (!empty($data)){
				$where['catalog_id'] = $data['id'];
			}else{
				$where['catalog_id'] = 999999;
			}
		}


		if (empty($where)) {
			$query = Kinolar::find();
		}else{
			$query = Kinolar::find()->where($where);
		}

		$provider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => 12
			],
		]);


		return $this->render('index', [
			'provider' => $provider,
			'name' => $name
		]);
	}
}


?>