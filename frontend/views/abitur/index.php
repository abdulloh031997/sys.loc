<?php
/** @var yii\web\View $this */
?>
<?= \frontend\widgets\TabWidget::widget() ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 w-100 table-responsive">
            <table class="table table-bordered table-hover table-sm text-center table-responsive">
                <tr>
                    <td colspan="3" class="bg-warning text-dark font-weight-bold text-uppercase"><strong><b><?=Yii::t('template', 'person_data')?></b></strong></td>
                </tr>
                <tr>
                    <td><strong><?=Yii::t('template','Application number')?></strong></td>
                    <td><b><?=$data['id']?></b></td>
                </tr>
                <tr>
                    <td><?=Yii::t('template', 'Full name')?></td>
                    <td><?=$data['full_name']?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('template', 'person_data')?></td>
                    <td><?=$data['pasport']?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('template', 'date of birth')?></td>
                    <td><?=Yii::$app->formatter->asDate($data['bdate'], 'yyyy-MM-dd');?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('template', 'Sex')?></td>
                    <td><?=$data['jins']?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('template', 'Nation')?></td>
                    <td><?=$data['millat']?></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold"><strong><b><?=Yii::t('template', 'Edu')?></b></strong></td>
                    <td>ALFRAGANUS UNIVERSITY</td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold text-uppercase"><strong><b><?=Yii::t('template', 'Selected destinations')?></b></strong></td>
                    <td><?=$data['dir_name']?></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold text-uppercase"><strong><b><?=Yii::t('template', 'Form of training')?></b></strong></td>
                    <td><?=$data['emode_name']?></td>
                </tr>
            </table>
        </div>
    </div>
</div>