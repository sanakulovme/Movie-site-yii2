<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Kinolar;
use yii\data\ActiveDataProvider;

class SearchController extends Controller
{
	public function actionIndex($q = false)
	{
		if ($q) {
			$query = Kinolar::find()->where(['title' => ['LIKE' => $q]]);

			$provider = new ActiveDataProvider([
				'query' => $query,
				'pagination' => [
					'pageSize' => 6
				],
			]);

			return $this->render('index', [
				'provider' => $provider
			]);
		}
	}
}