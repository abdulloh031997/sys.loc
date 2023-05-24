<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Special $model */

$this->title = Yii::t('app', 'Create Special');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Specials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
