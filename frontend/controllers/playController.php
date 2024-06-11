<?php


namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Country;
use frontend\models\Kinolar;
use yii\data\ActiveDataProvider;

class PlayController extends Controller
{
	public function actionIndex($path = false)
	{
		$data = Kinolar::find()->where(['video' => $path])->one();

		return $this->render('index', [
			'data' => $data
		]);
	}
}