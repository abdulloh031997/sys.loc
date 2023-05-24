<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_hems')->textInput() ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuqorolik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'davlat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'millat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jins')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bdate')->textInput() ?>

    <?= $form->field($model, 'pasport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imie')->textInput() ?>

    <?= $form->field($model, 'fakultet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mvdir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emode_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
