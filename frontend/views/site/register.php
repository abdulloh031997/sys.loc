<?php

/** @var yii\web\View $this */

/** @var yii\bootstrap5\ActiveForm $form */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title =Yii::t('template','register');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alert alert-info mt-4 text-center"><div><h4 class="text-center"> 2023-2024-o'quv yili uchun ALFRAGANUS UNIVERSITETIGA qabul qilish platformasi</h4> </div></div>
<div style="height: 100%;" class="my-5 py-1">
    <div class="card card-plain mt-5">
        <div class="card-header pb-0 text-left bg-transparent">
            <h3 class="font-weight-bolder text-info text-gradient text-center"><?=$this->title?></h3>
            <p class="mb-0"><?=Yii::t('template','log-reg')?></p>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <label><?=Yii::t('template','phone')?></label>
            <div class="mb-3">
                <?= $form->field($model, 'username', ['template' =>
                    '<div class="input-group field-signupform-username required">
                                                <div class="input-group-prepend ">
                                                    <div class="input-group-text bg-gradient-info font-weight-bold">+998</div>
                                                </div>
                                                {input}
                                            </div>
                                            {error}
                                            '])
                    ->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => 't', // basic year
                        'definitions' => ['t' => [
                            'validator' => '[0-9]',
                            'cardinality' => 9,
                            'prevalidator' => [
                                ['validator' => '[9,8,7,3]', 'cardinality' => 1],
                            ]
                        ]]
                    ]) ?>
            </div>
            <label><?=Yii::t('template','parol')?></label>
            <div class="mb-3">
                <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
            </div>
            <label><?=Yii::t('template','r-parol')?></label>
            <div class="mb-3">
                <?= $form->field($model, 'password_repeat')->passwordInput()->label(false) ?>
            </div>
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'imageOptions' => [
                    'id' => 'my-captcha-image'
                ],
                'template' => '<div class="row">
                                            <div class="col-sm-5" style="padding-top: 0.5em;cursor: pointer;">
                                                <i id ="refresh-captcha" class="bx bx-rotate-left btn-link pr-2"></i> {image}</div>
                                            <div class="col-sm-7">{input}</div></div>',
            ])->label(false);
            ?>
            <div class="d-flex justify-content-between">
                <div><a href="/site/re-pas" class="pull-left"><small><?=Yii::t('template','Parolni tiklash')?></small></a></div>
                <div><a href="/site/sign-up" class="pull-right"><small><?=Yii::t('template','login')?></small></a></div>
            </div>
            <div class="col-lg-12 text-center">
                <?= Html::submitButton(Yii::t('template','register'), ['class' => 'btn btn-primary w-100 mt-4 mb-0', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
