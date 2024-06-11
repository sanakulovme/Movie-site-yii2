<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Kinolar;
use yii\data\ActiveDataProvider;

class NewsController extends Controller
{
	public function actionIndex()
	{
		$query = Kinolar::find();

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