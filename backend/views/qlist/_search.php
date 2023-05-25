<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\QlistSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="qlist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'level_id') ?>

    <?= $form->field($model, 'qcontent') ?>

    <?= $form->field($model, 'ans1') ?>

    <?php // echo $form->field($model, 'ans2') ?>

    <?php // echo $form->field($model, 'ans3') ?>

    <?php // echo $form->field($model, 'ans4') ?>

    <?php // echo $form->field($model, 'correct_ans') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
