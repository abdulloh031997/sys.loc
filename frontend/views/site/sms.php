<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

/* @var $model \frontend\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
$this->title = 'Sms';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="auth-login" class="row align-content-center mt-4">
    <div class="col-xl-12 col-12" style="margin: auto;">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-12 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100">
                        <div class="card-content">
                            <div class="card-body">
                                Tasdiqlash uchun ***<?= substr($sms->phone, -4) ?> raqamiga SMS xabar
                                yuborildi. Tasdiqlash kodini kiriting!
                            ])
                            </div>
                                <?php $form = ActiveForm::begin(['action' => ['sms'],'options' => ['method' => 'post']]) ?>
                                <div class="form-group mb-50">
                                    <?= $form->field($sms, 'resivied_sms')->textInput(['autofocus' => true])->label(Yii::t('template','SMS kodni kiriting')) ?>
                                </div>
                                <div class="form-group " style="display: none">
                                    <?= $form->field($sms, 'id')->hiddenInput(['value'=> $sms->id])?>
                                </div>
                                <div class="form-group">
                                    <?= Html::submitButton(Yii::t('template', "Jo'natish").'<i
                                            id="icon-arrow" class="bx bx-right-arrow-alt"></i>', ['class' => 'btn btn-primary glow w-100 position-relative', 'name' => 'login-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
