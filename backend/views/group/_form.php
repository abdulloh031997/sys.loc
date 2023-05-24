<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Group $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fakultet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special')->textInput() ?>

    <?= $form->field($model, 'utype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emode_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emode_id')->textInput() ?>

    <?= $form->field($model, 'lang_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'faculty_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
