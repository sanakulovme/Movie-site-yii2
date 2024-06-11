<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Movies $model */

$this->title = 'Update Movies: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'janrs' => $janrs,
        'countrys' => $countrys,
        'catalogs' => $catalogs
    ]) ?>

</div>
