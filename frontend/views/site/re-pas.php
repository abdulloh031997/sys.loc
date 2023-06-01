<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

/* @var $model \frontend\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;

$this->title = 'Parolni tiklash';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- register section starts -->
<section class="row align-content-center my-5 py-1">
    <div class="col-md-12" style="margin: auto;margin-top: 0em">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- register section left -->
                <div class="col-md-12 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                        <div class="card-content">
                            <div class="card-body">
                               <div class="divider">

                                </div>
                                <?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>
                                <div class="form-group mb-50">
                                    <?= $form->field($model, 'username',['template'=>
                                        '
                                            <label class="control-label" for="signupform-username">{label}</label>
                                            <div class="input-group field-signupform-username required">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">+998</div>
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
                                                'prevalidator' =>  [
                                                    ['validator' => '[9,8,7,3]', 'cardinality' => 1],
                                                ]
                                            ]]
                                        ]) ?>
                                </div>

                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'imageOptions' => [
                                        'id' => 'my-captcha-image'
                                    ],
                                    'template' => '<div class="row">
                                            <div class="col-sm-3" style="padding-top: 0.5em;cursor: pointer;">
                                                <i id ="refresh-captcha" class="bx bx-rotate-left btn-link pr-2"></i> {image}</div>
                                            <div class="col-sm-9">{input}</div></div>',
                                ])->label(false);
                                ?>
                                <div class="my-2">
                                    <a href="/site/login" class="pull-left"><small>Kirish</small></a>
                                </div>
                                <div class="form-group">
                                    <?= Html::submitButton('Parol tiklash'.'<i
                                            id="icon-arrow" class="bx bx-right-arrow-alt"></i>', ['class' => 'btn btn-primary glow w-100 position-relative', 'name' => 'login-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
