<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Janr $model */

$this->title = 'Update Janr: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Janrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="janr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
