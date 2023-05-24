<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "special".
 *
 * @property int $id
 * @property int|null $code_hems
 * @property string|null $name
 * @property string|null $fakultet_name
 * @property int|null $faculty_id
 * @property string|null $type
 * @property int|null $status
 * @property string|null $created_at
 *
 * @property Faculty $faculty
 */
class Special extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'special';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_hems', 'faculty_id', 'status'], 'default', 'value' => null],
            [['code_hems', 'faculty_id', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'fakultet_name', 'type'], 'string', 'max' => 255],
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
            'code_hems' => 'Code Hems',
            'name' => 'Name',
            'fakultet_name' => 'Fakultet Name',
            'faculty_id' => 'Faculty ID',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
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
}
