<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_admin".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $password_reset_token
 * @property int $status
 * @property int $role_id
 * @property int|null $faculty_id
 * @property string $full_name
 * @property string $created_at
 * @property string|null $updated_at
 */
class UserAdd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'status', 'role_id', 'full_name'], 'required'],
            [['status', 'role_id', 'faculty_id'], 'default', 'value' => null],
            [['status', 'role_id', 'faculty_id','subject_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password', 'auth_key', 'password_reset_token', 'full_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Login',
            'password' => 'Parol',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'role_id' => 'Huquq',
            'faculty_id' => 'Fakultet',
            'full_name' => 'F.I.O.',
            'subject_id' => 'Fani tanlang',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
