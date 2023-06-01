<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */

/* @var $model \frontend\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- register section starts -->
<section class="row align-content-center my-5">
    <div class="col-md-12" style="margin: auto;">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- register section left -->
                <div class="col-md-12 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                      
                        <div class="card-content">
                            <div class="card-body">
                               <div class="divider">
                                    <div class="divider-text text-uppercase text-muted"><small><?=Yii::t('template','Parolni qayta kiriting')?></small>
                                    </div>
                                </div>
                                <?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>
                                <div class="form-group">
                                    <?= $form->field($model, 'password')->passwordInput()->label(Yii::t('template','Parol'), ['class' => 'text-bold-600']) ?>
                                    <br>
                                    <?= $form->field($model, 'password_repeat')->passwordInput()->label(Yii::t('template','Parolni qayta kiriting'), ['class' => 'text-bold-600']) ?>
                                </div>
                                <br>
                                <div class="form-group">
                                    <?= Html::submitButton(Yii::t('template', 'Kirish').'<i
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
<!-- register section endss -->