<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserAdmin $model */

$this->title = Yii::t('app', 'Create User Admin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
