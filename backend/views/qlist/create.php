<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Qlist $model */

$this->title = Yii::t('app', 'Savol yaratish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Savollar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qlist-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
