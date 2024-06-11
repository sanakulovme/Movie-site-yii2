<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Janr $model */

$this->title = 'Create Janr';
$this->params['breadcrumbs'][] = ['label' => 'Janrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="janr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
