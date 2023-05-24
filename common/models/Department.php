<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $code_hems
 * @property string $name
 * @property string $fakutet_name
 * @property int|null $faculty_id
 * @property string $created_at
 * @property int $status
 *
 * @property Faculty $faculty
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_hems', 'name', 'fakutet_name'], 'required'],
            [['faculty_id', 'status'], 'default', 'value' => null],
            [['faculty_id', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['code_hems', 'name', 'fakutet_name'], 'string', 'max' => 255],
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
            'fakutet_name' => 'Fakutet Name',
            'faculty_id' => 'Faculty ID',
            'created_at' => 'Created At',
            'status' => 'Status',
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
