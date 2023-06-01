<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="ALFRAGANUS UNIVERSITY - Nodavlat oliy ta'lim muassasasi">
        <meta name="keywords" content="ALFRAGANUS universiteti - Nodavlat oliy ta'lim muassasasi">
        <meta name="author" content="ALFRAGANUS UNIVERSITY - Nodavlat oliy ta'lim muassasasi">
        <meta name="title" content="ALFRAGANUS UNIVERSITY - Nodavlat oliy ta'lim muassasasi" />
        <link rel="icon" href="/favicon.ico" sizes="32x32" />
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php $this->head() ?>
    </head>
    <body class="h-100">
    <?php $this->beginBody() ?>
    <?= \frontend\widgets\HeaderWidget::widget() ?>
    <?php
    $flash = Yii::$app->session->getAllFlashes();
    if (!empty($flash)):
        foreach ($flash as $type => $message) :
            $js = <<< JS
                                 Toastify({text: "{$message}",node: "{$type}"}).showToast();
                                 JS;
            $this->registerJs($js, \yii\web\View::POS_LOAD);
        endforeach;
    endif; ?>
    <main class="container">
        <?= $content ?>
    </main>
    <?= \frontend\widgets\FooterWidget::widget() ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
