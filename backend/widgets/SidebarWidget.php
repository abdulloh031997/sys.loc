<?php

namespace backend\widgets;
use yii\helpers\ArrayHelper;

class SidebarWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("sidebar");
    }

}