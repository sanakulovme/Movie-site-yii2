<?php


namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Country;
use frontend\models\Kinolar;
use yii\data\ActiveDataProvider;

class PlayController extends Controller
{
	public function actionIndex($slag = false)
	{
		$data = Kinolar::find()->where(['slag' => $slag])->one();
		$list = Kinolar::find()->limit(6)->all();

		return $this->render('index', [
			'data' => $data,
			'list' => $list
		]);
	}
}