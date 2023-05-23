<?php

use yii\helpers\Url;
use yii\helpers\Html;

$url = Yii::getAlias("@fronted_domain");
?>
<footer class="content-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , Test bo'lim  ❤️
            <a href="#" target="_blank" class="footer-link fw-bolder">ALFRAGANUS UNIVERSITY</a>
        </div>

    </div>
</footer>