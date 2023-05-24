<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\EduLang $model */

$this->title = Yii::t('app', 'Create Edu Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edu Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edu-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
