<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Movies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'videoFile')->fileInput() ?>

    <?= $form->field($model, 'photoFile')->fileInput() ?>

     <?= $form->field($model, 'catalog_id')->dropDownList($catalogOptions, ['prompt' => 'Select a catalog']) ?>
     <?= $form->field($model, 'country_id')->dropDownList($countryOptions, ['prompt' => 'Select a country']) ?>
     <?= $form->field($model, 'janr_id')->dropDownList($janrOptions, ['prompt' => 'Select a Genre']) ?>

    <?= $form->field($model, 'star')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
