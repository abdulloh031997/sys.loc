<?php

namespace backend\widgets;
use yii\helpers\ArrayHelper;

class HeaderWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("header");
    }

}