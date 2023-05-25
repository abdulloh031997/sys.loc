<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php $this->head() ?>
        <style>
            body{
                overflow-x: hidden;
            }
            .modal-backdrop{
                z-index:100 !important
            }
            .breadcrumb {
                padding: 10px;
                border-radius: 50px;
                background-color: rgb(255, 255, 255);
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?= \backend\widgets\SidebarWidget::widget(); ?>
            <div class="layout-page">
                <?= \backend\widgets\HeaderWidget::widget(); ?>
                <div class="content-wrapper">
                    <div class="container-fluid container-p-y">
                        <?php
                        echo \yii\widgets\Breadcrumbs::widget([
                            'options' => ['class' => 'breadcrumb '],
                            'homeLink' => [
                                'label' => '<i class="bx bx-home"></i></a></li>',
                                'url' => Yii::$app->homeUrl,
                                'encode' => false,
                            ],
                            'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
                            'activeItemTemplate' => "<li class='breadcrumb-item active' aria-current='page'>{link}</li>\n",
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]);
                        ?>
                    </div>
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <?= $content ?>
                    </div>
                </div>
                <?= \backend\widgets\FooterWidget::widget(); ?>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
