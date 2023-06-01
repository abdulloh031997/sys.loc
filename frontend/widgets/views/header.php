<?php
use yii\helpers\Url;
use yii\helpers\Html;
$url = Yii::getAlias("@fronted_domain");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler">
            <img
                    src="/img/logo.svg"
                    height="45"
                    loading="lazy"
            />
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand mt-2 mt-lg-0" href="/">
                <img
                        src="/img/logo.svg"
                        height="89"
                        loading="lazy"
                />
            </a>
        </div>

        <div class="d-flex align-items-center">
                <span>
                    <?php if (Yii::$app->language =='uz'): ?>
                        <a class="dropdown-item" href="/language/ru">
                              <img src="/img/uz.svg" alt="" style="width:21px"> O'zbekcha</a>
                    <?php else: ?>
                        <a class="dropdown-item" href="/language/uz">
                           <img src="/img/ru.svg" alt="" style="width:21px"> Русский</a>
                    <?php endif; ?>
                </span>
            <?php if (Yii::$app->user->isGuest): ?>
                <div class="mx-lg-3">
                    <a href="/site/login" class="btn btn-outline-primary mx-2 btn-sm"><?=Yii::t('template','login')?></a>
                </div>
            <?php else: ?>
                <div class="dropdown">
                    <?= Html::a('<span class="text-dark font-weight-bold mx-3"> ' . Yii::$app->user->identity->username . ' </span><i class="fas fa-sign-out"></i>', ['/site/logout'], ['class' => 'd-flex  p-2 align-items-center hidden-arrow', 'data-method' => 'post', 'title' => 'Logout']) ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</nav>
