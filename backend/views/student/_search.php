<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\StudentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code_hems') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'fuqorolik') ?>

    <?= $form->field($model, 'davlat') ?>

    <?php // echo $form->field($model, 'millat') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'tuman') ?>

    <?php // echo $form->field($model, 'jins') ?>

    <?php // echo $form->field($model, 'bdate') ?>

    <?php // echo $form->field($model, 'pasport') ?>

    <?php // echo $form->field($model, 'imie') ?>

    <?php // echo $form->field($model, 'fakultet') ?>

    <?php // echo $form->field($model, 'group_name') ?>

    <?php // echo $form->field($model, 'mvdir') ?>

    <?php // echo $form->field($model, 'emode_name') ?>

    <?php // echo $form->field($model, 'utype') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'group_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
