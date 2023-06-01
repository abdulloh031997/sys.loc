<?php

/** @var yii\web\View $this */

/** @var yii\bootstrap5\ActiveForm $form */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('template','login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="height: 100%;" class="my-5 py-1">
    <div class="card my-5 shadow">
        <div class="card-header pb-0 text-left bg-transparent">
            <h3 class="font-weight-bolder text-info text-gradient text-center"><?=$this->title ?></h3>
            <p class="mb-0"><?=Yii::t('template','log-reg')?></p>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <label><?=Yii::t('template','phone')?></label>
            <div class="mb-3">
                <?= $form->field($model, 'username')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => 'AA9999999',
                ]) ?>
            </div>
            <label><?=Yii::t('template','parol')?></label>
            <div class="mb-3">
                <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
            </div>
            <div class="col-lg-12 text-center">
                <?= Html::submitButton(Yii::t('template','login'), ['class' => 'btn btn-primary w-100 mt-4 mb-0', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
