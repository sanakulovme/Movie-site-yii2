<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\Movies $model */

$this->title = 'Create Movies';
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'catalogOptions' => ArrayHelper::map($catalogs, 'id', 'title'),
        'countryOptions' => ArrayHelper::map($countrys, 'id', 'title'),
        'janrOptions' => ArrayHelper::map($janrs, 'id', 'title')
    ])
    ?>

</div>
