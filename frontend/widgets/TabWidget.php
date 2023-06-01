<?php

namespace frontend\widgets;
use Yii;
use yii\helpers\ArrayHelper;
use common\models\Exam;

class TabWidget extends \yii\base\Widget
{
    public function run()
    {

        return $this->render("tab");
    }

}