<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $name
 * @property string $fakultet
 * @property int $special
 * @property string $utype
 * @property string $emode_name
 * @property string $lang_name
 * @property int|null $emode_id
 * @property int|null $lang_id
 * @property string $created_at
 * @property int|null $faculty_id
 *
 * @property Emode $emode
 * @property Faculty $faculty
 * @property EduLang $lang
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fakultet', 'special', 'utype', 'emode_name', 'lang_name'], 'required'],
            [['special', 'emode_id', 'lang_id', 'faculty_id'], 'default', 'value' => null],
            [['special', 'emode_id', 'lang_id', 'faculty_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'fakultet', 'utype', 'emode_name', 'lang_name'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => EduLang::class, 'targetAttribute' => ['lang_id' => 'id']],
            [['emode_id'], 'exist', 'skipOnError' => true, 'targetClass' => Emode::class, 'targetAttribute' => ['emode_id' => 'id']],
            [['faculty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::class, 'targetAttribute' => ['faculty_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'fakultet' => 'Fakultet',
            'special' => 'Special',
            'utype' => 'Utype',
            'emode_name' => 'Emode Name',
            'lang_name' => 'Lang Name',
            'emode_id' => 'Emode ID',
            'lang_id' => 'Lang ID',
            'created_at' => 'Created At',
            'faculty_id' => 'Faculty ID',
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
     * Gets query for [[Faculty]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::class, ['id' => 'faculty_id']);
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
}
