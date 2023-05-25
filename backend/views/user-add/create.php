<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserAdd $model */

$this->title = Yii::t('app', 'Foydalanuvchi yaratish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foydalanuvchilar ro\'yxati'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-add-create">
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
