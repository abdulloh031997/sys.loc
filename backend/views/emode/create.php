<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Emode $model */

$this->title = Yii::t('app', 'Create Emode');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Emodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
