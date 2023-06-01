<?php

use yii\helpers\Url;
use yii\helpers\Html;

$url = Yii::getAlias("@fronted_domain");
?>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom container" >
        <div class="me-5 d-none d-lg-block">
            <span><?=Yii::t('template','footer_text')?></span>
        </div>
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>

        </div>
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-12 col-lg-12 col-xl-12 mx-auto  mb-4">
                    <img
                            src="/img/logo.svg"
                            alt="MDB Logo"
                            height="89"
                            loading="lazy"
                    />
                </div>

            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Ishlab chiqan:
        <a class="text-reset fw-bold" href="/">ALFRAGANUS UNIVERSITY</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->