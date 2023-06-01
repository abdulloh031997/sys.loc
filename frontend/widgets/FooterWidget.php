<?php

namespace frontend\widgets;

use yii\helpers\ArrayHelper;

class FooterWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("footer");
    }
}