<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;
use common\models\Emode;
use common\models\EduDirection;
use common\models\EduLang;
$emode = Emode::dDEmodeList();
$mvdir = EduDirection::dDList($model->emode_id);

?>
<style>
    .datepicker {
        z-index: 9999999999999999 !important;
    }

    .field-abitur-emode_id .invalid-feedback {
        margin-top: 5px !important;
    }

    .field-abitur-lang_id .invalid-feedback {
        margin-top: 5px !important;
    }

    .field-abitur-direction_id .invalid-feedback {
        margin-top: 5px !important;
    }

    .field-abitur-sex .invalid-feedback {
        margin-top: 5px !important;
    }

    .field-abitur-nation_id .invalid-feedback {
        margin-top: 5px !important;
    }

    #abitur-nation {
        z-index: 1;
    }
</style>
<div class="my-3">
    <?= \frontend\widgets\TabWidget::widget() ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-12">
                    <h3><?=Yii::t('template', 'Shartnoma')?></h3>
                </div>
                <div class="col-md-4">
                    <div class="controls">
                        <?= $form->field($model, 'emode_id')->widget(\kartik\select2\Select2::classname(), [
                            'data' => $emode,
                            'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                            'theme' => \kartik\select2\Select2::THEME_KRAJEE,
                        ]); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="controls">
                        <?= $form->field($model, 'dir_id')->widget(\kartik\select2\Select2::classname(), [
                            'data' => $mvdir,
                            'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                            'theme' => \kartik\select2\Select2::THEME_KRAJEE,
                        ]); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="controls">
                        <?= $form->field($model, 'etap')->widget(\kartik\select2\Select2::classname(), [
                            'data' => [2=>'2-KURS',3=>'3-KURS',4=>'4-KURS'],
                            'options' => ['placeholder' => 'Tanlang', 'multiple' => false],
                            'theme' => \kartik\select2\Select2::THEME_KRAJEE,
                        ]); ?>
                    </div>
                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end my-4">
                    <?= Html::submitButton(Yii::t('template', 'Save'), ['class' => 'btn btn-primary glow mr-sm-1 mb-1']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php ob_start() ?>
    <?php if (!empty($model) and !empty($model->flang)):?>
    $('#fLang').show();
    <?php elseif (!empty($model->getErrors())):?>
    $('#fLang').show();
    <?php else:?>
    $('#fLang').hide();
    <?php endif;?>
    $(document).ready(function(){

        $("#shartnoma-emode_id").change(function(){
            var emode_id =$(this).val();
            $.ajax({
                type: 'get',
                data: {
                    emode_id: emode_id
                },
                url: '/abitur/dir',
                success: function (res) {
                    $('#shartnoma-dir_id').html(res);
                },
                error: function (e) {
                    console.log(e);
                }
            });

        });

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
    <?php $this->registerJs(ob_get_clean()) ?>
</script>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 21;
        padding-top: 100px;
        left: 0;
        top: 0;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        z-index: 15555;
    }
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="w-100 text-center">
            <p><img src="/img/shir_uz.png" width="80%" alt=""></p>
        </div>
    </div>

</div>
