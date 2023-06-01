<?php

namespace frontend\controllers;


use common\models\EduDirection;
use common\models\Shartnoma;
use common\models\Student;
use kartik\mpdf\Pdf;
use Yii;
use yii\web\Cookie;

class AbiturController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user = Yii::$app->user->identity;
        if (isset($user->student_id) && !empty($user->student_id)) {
            $data = Student::find()->select(['student.*','shartnoma.sh_raqam'])->joinWith('shartnoma',false)->where(['student.id'=>$user->student_id])->asArray()->one();
            return $this->render('index',['data'=>$data]);
        }else{
            return $this->redirect('/site/login');
        }
    }

    public function actionCreate()
    {
        $user = Yii::$app->user->identity;
        if (isset($user->student_id) && !empty($user->student_id)) {
            $model = Shartnoma::find()->where(['student_id' => $user->student_id])->one();
            if (empty($model)) {
                $model = new Shartnoma();
            }
            if ($model->load(Yii::$app->request->post())) {
                $model->invoice  = generateByMicrotime();
                $model->student_id  = $user->student_id;
                if ($model->save()) {
                    return $this->redirect('/abitur/index');
                } else {
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            return $this->redirect('/site/login');
        }
    }

    public function actionDir($emode_id)
    {
        $select = 'name' . lang() . ' as name_uz,id';
        $data = EduDirection::find()
            ->select($select)
            ->where(['emode_id' => $emode_id])
            ->andWhere(['lang_id' =>1])
            ->andWhere(['status' => 1])
            ->groupBy(['id', 'name_uz'])
            ->asArray()
            ->all();
        return $this->renderPartial('option', ['data' => $data]);
    }


    public function actionLanguage($lang)
    {
        $cookie = Yii::$app->response->cookies;
        $cookie->add(new Cookie([
            'name' => 'lang',
            'value' => $lang,
            'expire' => time() + 86400 * 365,
        ]));
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function beforeAction($action)
    {
        $cookie = \Yii::$app->request->cookies;
        if (empty($cookie['lang']->value))
            $lang = 'uz';
        else
            $lang = $cookie['lang']->value;
        Yii::$app->language = $lang;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }


    public function actionShartnoma()
    {
        $user = Yii::$app->user->identity;
        if (!$user->id && empty($user->id)) {
            throw new \yii\web\NotFoundHttpException("Ma'lumot topilmadi");
        }
        $items = Shartnoma::find()
            ->select([
                'abitur.*',
                'edu_direction.*',
                'edu_direction.name_uz as dir_name',
                'edu_lang.name_uz as lang_name',
                'emode.name_uz as emode_name',
                'exam.ball',
                'edu_direction.contract_summa',
                'exam.invoice', 'exam.sh_raqam',
                'exam.end_date',
                'user.auth_key'
            ])
            ->joinWith('direction', false)
            ->joinWith('direction.emode', false)
            ->joinWith('direction.lang', false)
            ->joinWith('user', false)
            ->joinWith('user.exam', false)
            ->where(['abitur.user_id' => $user->id])->asArray()->one();
//        var_dump($items);
//        exit();
        $content = $this->renderPartial('shartnoma', compact('items'));
        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8,
            'format' => Pdf::FORMAT_A4,
//            'orientation' => Pdf::ORIENT_LANDSCAPE,
            'marginTop' => 3,
            'marginBottom' => 3,
            'marginLeft' => 3,
            'marginRight' => 3,
            'cssInline' => 'body{color:#000}',
            'content' => $content,
        ]);
        return $pdf->render();
    }
}