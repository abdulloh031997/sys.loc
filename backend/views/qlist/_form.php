<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Subject;
/** @var yii\web\View $this */
/** @var common\models\Qlist $model */
/** @var yii\widgets\ActiveForm $form */

$fan = Subject::find()->all();
$subject = \yii\helpers\ArrayHelper::map($fan,'id','name');
?>

<div class="qlist-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'type')->widget(\kartik\select2\Select2::classname(), [
                'data' => [1 => 'Text', 2 => 'Rasim'],
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'subject_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $subject,
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                'theme' => \kartik\select2\Select2::THEME_KRAJEE,
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'level_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => [
                    1 => Yii::t('app', '1-Daraja'),
                    2 => Yii::t('app', '2-Daraja'),
                    3 => Yii::t('app', '3-Daraja'),
                ],
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                'theme' => \kartik\select2\Select2::THEME_KRAJEE,
            ]); ?>
        </div>
    </div>
    <div class="row mt-3" id="textliy">
        <div class="col-md-12">
            <?= $form->field($model, 'qcontent')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-md-3 mt-3">
            <?= $form->field($model, 'ans1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 mt-3">
            <?= $form->field($model, 'ans2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 mt-3">
            <?= $form->field($model, 'ans3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 mt-3">
            <?= $form->field($model, 'ans4')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row" id="rasimliy">
        <div class="col-md-12 mt-3">
            <div class="text-danger font-weight-bold"><a href="" class="text-danger font-weight-bold" target="_blank">Siz rasimli savolingiz ko'rinishi quyidagicha bo'lishi kerak</a></div>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
            ]); ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <?= $form->field($model, 'correct_ans')->widget(\kartik\select2\Select2::classname(), [
                'data' => ['' => 'Tanlash', 1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D'],
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                'theme' => \kartik\select2\Select2::THEME_KRAJEE,
            ]); ?>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<style>
    #rasimliy {
        display: none;
    }
</style>
<?php
$this->registerJs(<<<JS
    
$(document).ready(function(){

    $("#qlist-type").change(function(){
        var type =$(this).val();
        if (type == 1){
            $('#rasimliy').hide();
            $('#textliy').show();
        }else{
            $('#rasimliy').show();
            $('#textliy').hide();
        }
           
        });
});
JS
);
?>
