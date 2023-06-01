<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "edu_direction".
 *
 * @property int $id
 * @property int|null $edu_id
 * @property int|null $status
 * @property int $emode_id
 * @property int $lang_id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property int|null $mvdir
 * @property int|null $count_plan
 * @property int|null $contract_summa
 * @property string|null $block1
 * @property string|null $block2
 * @property string|null $block3
 * @property int|null $flang
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $fan1
 * @property string|null $fan2
 * @property string|null $fan3
 * @property string|null $type
 * @property int|null $year
 */
class EduDirection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'edu_direction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edu_id', 'status', 'emode_id', 'lang_id', 'mvdir', 'count_plan', 'contract_summa', 'flang', 'year'], 'default', 'value' => null],
            [['edu_id', 'status', 'emode_id', 'lang_id', 'mvdir', 'count_plan', 'contract_summa', 'flang', 'year'], 'integer'],
            [['emode_id', 'lang_id', 'name_uz', 'name_ru', 'name_en'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name_uz', 'name_ru', 'name_en', 'block1', 'block2', 'block3', 'fan1', 'fan2', 'fan3', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'edu_id' => 'Edu ID',
            'status' => 'Status',
            'emode_id' => 'Emode ID',
            'lang_id' => 'Lang ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'mvdir' => 'Mvdir',
            'count_plan' => 'Count Plan',
            'contract_summa' => 'Contract Summa',
            'block1' => 'Block1',
            'block2' => 'Block2',
            'block3' => 'Block3',
            'flang' => 'Flang',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fan1' => 'Fan1',
            'fan2' => 'Fan2',
            'fan3' => 'Fan3',
            'type' => 'Type',
            'year' => 'Year',
        ];
    }

    /**
     * Gets query for [[Emode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmode()
    {
        return $this->hasOne(Emode::class, ['id' => 'emode_id']);
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShartnoma()
    {
        return $this->hasMany(Shartnoma::class, ['dir_id' => 'id']);
    }

    /**
     * Gets query for [[Lang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(EduLang::class, ['id' => 'lang_id']);
    }

    public static function dDList($emode_id){
        $select = 'name'.lang().' as name_uz,id';
        return self::find()
            ->select($select)
            ->where(['emode_id'=>$emode_id])
            ->andWhere(['edu_id'=>1])
            ->andWhere(['status'=>1])
            ->groupBy(['id','name_uz'])
            ->indexBy('id')->column();
    }
}
