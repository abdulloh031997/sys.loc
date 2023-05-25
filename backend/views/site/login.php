<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

/* @var $model common\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$fieldOptions1 = ['inputTemplate' => "{input}<span class='fas fa-envelope env'></span>"];
$fieldOptions2 = ['inputTemplate' => "{input}<span class='fas fa-lock lc'></span>"];
?>
<style>

</style>
<div class="home-btn d-none d-sm-block">
    <a href="#"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
<div class="row" style="display: flex;align-items: center">
    <div class="col-md-4 mx-auto">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center text-center ">
                            <a href="#" class="app-brand-link text-center ">
                              <span class="app-brand-logo demo m-auto">
                                <img src="/img/favicon/logo.svg" alt="">
                              </span>
                            </a>
                        </div>
                        <div class="p-2 mt-5">
                            <?php $form = ActiveForm::begin([
                                'options' => ['class' => 'text-start', 'autocomplete' => 'off'],

                                'fieldConfig' => [
                                    'template' => "{label}\n{input}\n{error}",
                                    'labelOptions' => ['class' => 'form-label'],
                                    'inputOptions' => ['class' => 'form-control'],
                                    'errorOptions' => ['class' => 'col-lg-7'],
                                ],
                            ]); ?>
                            <?= $form->field($model, 'username')->textInput(['autofocus' => false]) ?>
                            <br>
                            <?= $form->field($model, 'password')->passwordInput() ?>
                            <br>

                            <div class="text-center">
                                <?= Html::submitButton('Tizimga kirish<i class="mdi mdi-arrow-right float-md-right"></i>', ['class' => 'btn btn-primary w-100 my-4 mb-2 float-left', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

