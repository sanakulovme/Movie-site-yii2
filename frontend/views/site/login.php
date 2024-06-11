<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login" style="margin-top: 60px;">
    <div class="sign section--bg" data-bg="img/section/section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- authorization form -->
                        <?php $form = ActiveForm::begin([
                            'options' => ['class' => 'sign__form'],
                        ]); ?>

                        <?= Html::a(Html::img('img/logo.svg', ['alt' => '']), ['/'], ['class' => 'sign__logo']) ?>

                        <div class="sign__group">
                            <?= $form->field($model, 'username')->textInput(['class' => 'sign__input', 'placeholder' => 'Username'])->label(false) ?>
                        </div>

                        <div class="sign__group">
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'sign__input', 'placeholder' => 'Password'])->label(false) ?>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">Remember Me</label>
                        </div>

                        <?= Html::submitButton('Sign in', ['class' => 'sign__btn', 'type' => 'button']) ?>

                        <span class="sign__text">Don't have an account? <?= Html::a('Sign up!', ['/site/signup']) ?></span>

                        <span class="sign__text"><?= Html::a('Forgot password?', '#') ?></span>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

