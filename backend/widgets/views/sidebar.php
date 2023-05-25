<?php

use yii\helpers\Url;
use yii\helpers\Html;

$url = Yii::getAlias("@fronted_domain");
$user = Yii::$app->user->identity;
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
              <span class="app-brand-logo demo">
              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="/img/favicon/logo.svg" alt=""></span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item <?= Yii::$app->request->url == '/' ? 'active' : '' ?>">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Bosh sahifa</div>
            </a>
        </li>
        <li class="menu-item <?= (Yii::$app->request->url == '/role' || Yii::$app->request->url == '/role/index' || Yii::$app->request->url == '/user-add') ? 'active open' : '' ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Foydalanuvchi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= (Yii::$app->request->url == '/user-admin') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/user-add']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Foydalanuvchilar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?= (Yii::$app->request->url == '/special' || Yii::$app->request->url == '/edu-lang' || Yii::$app->request->url == '/emode' || Yii::$app->request->url == '/department' || Yii::$app->request->url == '/group' || Yii::$app->request->url == '/student') ? 'active open' : '' ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Talabalar</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item <?= (Yii::$app->request->url == '/edu-lang') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/edu-lang']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Ta'lim tili</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/emode') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/emode']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Ta'lim shakli</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/department') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/department']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Fakultet</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/special') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/special']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Kanfedralar</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/group') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/group']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Gruhlar</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/student') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/student']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Talabalar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?= (Yii::$app->request->url == '/subject' || Yii::$app->request->url == '/exam' || Yii::$app->request->url == '/qlist') ? 'active open' : '' ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Imtihon</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item <?= (Yii::$app->request->url == '/subject') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/subject']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Fanlar</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/exam') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/exam']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Imtihonlar</div>
                    </a>
                </li>
                <li class="menu-item <?= (Yii::$app->request->url == '/qlist') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/qlist']) ?>" class="menu-link">
                        <div data-i18n="Notifications">Savollar</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>