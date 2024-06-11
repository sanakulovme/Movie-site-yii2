<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
?>
<div class="sign section--bg" data-bg="img/section/section.jpg" style="margin-top:80px;">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- registration form -->

                        <?php $form = ActiveForm::begin([
                        'options' => ['class' => 'sign__form'],
                            ]); ?>

                            <?= Html::a(Html::img('img/logo.svg', ['alt' => '']), ['index.html'], ['class' => 'sign__logo']) ?>

                            <div class="sign__group">
                                <?= $form->field($model, 'username')->textInput(['class' => 'sign__input', 'placeholder' => 'Username'])->label(false) ?>
                            </div>

                            <div class="sign__group">
                                <?= $form->field($model, 'email')->textInput(['class' => 'sign__input', 'placeholder' => 'Email'])->label(false) ?>
                            </div>

                            <div class="sign__group">
                                <?= $form->field($model, 'password')->passwordInput(['class' => 'sign__input', 'placeholder' => 'Password'])->label(false) ?>
                            </div>

                            <div class="sign__group sign__group--checkbox">
                                <input id="remember" name="remember" type="checkbox" checked="checked">
                                <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
                            </div>

                            <?= Html::submitButton('Sign up', ['class' => 'sign__btn', 'type' => 'button']) ?>

                            <span class="sign__text">Already have an account? <?= Html::a('Sign in!', ['/site/login']) ?></span>

                        <?php ActiveForm::end(); ?>
                        <!-- registration form -->
                    </div>
                </div>
            </div>
    </div>
</div>

