<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MoviesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'desc') ?>

    <?= $form->field($model, 'country_id') ?>

    <?= $form->field($model, 'catalog_id') ?>

    <?php // echo $form->field($model, 'janr_id') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'star') ?>

    <?php // echo $form->field($model, 'format') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
