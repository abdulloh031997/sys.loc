<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" >
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <style>
            body{
                font-family: sans-serif !important;
                font-weight: normal !important;
            }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="container-scroller">
        <?= \backend\widgets\HeaderWidget::widget(); ?>
        <div class="container-fluid page-body-wrapper pt-0 proBanner-padding-top">
            <?= \backend\widgets\SidebarWidget::widget(); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $content ?>
                </div>
            </div>

        </div>

    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
