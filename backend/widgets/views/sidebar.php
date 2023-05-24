<?php

use yii\helpers\Url;
use yii\helpers\Html;

$url = Yii::getAlias("@fronted_domain");
$user = Yii::$app->user->identity;
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Bobojonov A</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/">
                <span class="menu-title">Bosh sahifa</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Foydalanuvchilar</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/user-admin/">Foydalanuvchi</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ui-talaba" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Talaba</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="ui-talaba" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/emode/">Ta'lim shakli</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/edu-lang/">Ta'lim tili</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/departament/">Kanfedralar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/faculty/">Fakultetlar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/student/">Talabalar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/subject">
                <span class="menu-title">Fanlar</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/qlist">
                <span class="menu-title">Savollar</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Imtihon</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/exam"> Imtihon</a></li>
                </ul>
            </div>
        </li>
<!--        <li class="nav-item sidebar-actions">-->
<!--              <span class="nav-link">-->
<!--                <div class="border-bottom">-->
<!--                  <h6 class="font-weight-normal mb-3">Projects</h6>-->
<!--                </div>-->
<!--                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>-->
<!--                <div class="mt-4">-->
<!--                  <div class="border-bottom">-->
<!--                    <p class="text-secondary">Categories</p>-->
<!--                  </div>-->
<!--                  <ul class="gradient-bullet-list mt-4">-->
<!--                    <li>Free</li>-->
<!--                    <li>Pro</li>-->
<!--                  </ul>-->
<!--                </div>-->
<!--              </span>-->
<!--        </li>-->
    </ul>
</nav>