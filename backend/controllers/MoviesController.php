<?php

namespace backend\controllers;

use common\models\Movies;
use common\models\MoviesSearch;
use frontend\models\Janr;
use frontend\models\Country;
use frontend\models\Catalog;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii;

/**
 * MoviesController implements the CRUD actions for Movies model.
 */
class MoviesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Movies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MoviesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Movies model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Movies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
         $model = new Movies();
          $catalogs = Catalog::find()->select(['id', 'title'])->all();
          $countrys = Country::find()->select(['id', 'title'])->all();
          $janrs = Janr::find()->select(['id', 'title'])->all();

        if ($model->load(Yii::$app->request->post())) {
            $model->videoFile = UploadedFile::getInstance($model, 'videoFile');
            $model->photoFile = UploadedFile::getInstance($model, 'photoFile');

            if ($model->validate()) {
                if ($model->videoFile) {
                    $fileName = time();
                    $videoPath = Yii::getAlias('@frontend').'/web/uploads/videos/' . $fileName . '.' . $model->videoFile->extension;
                    $model->videoFile->saveAs($videoPath);
                    $model->video = $fileName.'.'.$model->videoFile->extension;
                }
                if ($model->photoFile) {
                    $photoPath = Yii::getAlias('@frontend').'/web/uploads/photos/' . $fileName . '.' . $model->photoFile->extension;
                    $model->photoFile->saveAs($photoPath);
                    $model->photo = $fileName.'.'.$model->photoFile->extension;
                }
                if ($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                Yii::error($model->errors);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'catalogs' => $catalogs,
            'countrys' => $countrys,
            'janrs' => $janrs
        ]);
    }

    /**
     * Updates an existing Movies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $janrs = Janr::find()->all();
        $countrys = Country::find()->all();
        $catalogs = Catalog::find()->all();
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'janrs' => $janrs,
            'countrys' => $countrys,
            'catalogs' => $catalogs
        ]);
    }

    /**
     * Deletes an existing Movies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Movies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Movies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Movies::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
