<?php

use common\models\Qlist;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\QlistSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Savollar bazasi');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qlist-index">

    <div class="d-flex justify-content-between align-items-center">
        <h3><?= Html::encode($this->title) ?></h3>

        <p>
                <?= Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-secondary']) ?>
        </p>
    </div>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table-sm'],
        'responsive' => true,
        'striped' => true,
        'condensed' => true,
        'bordered' => true,
        'hover' => true,
        'pjax' => true,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

//            'id',
            'subject_id',
            'level_id',
            'qcontent:ntext',
            'ans1',
            'ans2',
            'ans3',
            'ans4',
            //'correct_ans',
            //'type',
            //'image',
            //'created_at',
            //'updated_at',
            'user_id',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Qlist $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
