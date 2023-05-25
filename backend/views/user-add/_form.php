<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Faculty;
use common\models\Subject;
/** @var yii\web\View $this */
/** @var common\models\UserAdd $model */
/** @var yii\widgets\ActiveForm $form */

if (Yii::$app->user->identity->role_id == 2){
    $role = [3 => 'Teacher'];
    $data = Faculty::find()->all();
    $fan = Subject::find()->all();
}
elseif (Yii::$app->user->identity->role_id == 1){
    $role = [1 => 'Admin', 2 => 'Department', 3 => 'Teacher'];
    $data = Faculty::find()->all();
    $fan = Subject::find()->all();
}
$faculty = \yii\helpers\ArrayHelper::map($data,'id','name');
$subject = \yii\helpers\ArrayHelper::map($fan,'id','name');
?>

<div class="user-add-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'role_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $role,
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
            ]); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'faculty_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $faculty,
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
            ]);  ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'subject_id')->widget(\kartik\select2\Select2::classname(), [
                'data' => $subject,
                'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
            ]);  ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 mt-2">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 mt-2">
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <div class="form-group mt-3">
                <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
