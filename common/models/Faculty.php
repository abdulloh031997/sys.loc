<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property int $id
 * @property string $code_hems
 * @property string $name
 * @property string $status
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property Department[] $departments
 * @property Group[] $groups
 * @property Special[] $specials
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_hems', 'name', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['code_hems', 'name', 'status'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::class, ['faculty_id' => 'id']);
    }

    /**
     * Gets query for [[Groups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Group::class, ['faculty_id' => 'id']);
    }

    /**
     * Gets query for [[Specials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecials()
    {
        return $this->hasMany(Special::class, ['faculty_id' => 'id']);
    }
}
