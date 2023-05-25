<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qlist".
 *
 * @property int $id
 * @property int $subject_id
 * @property int $level_id
 * @property string $qcontent
 * @property string $ans1
 * @property string $ans2
 * @property string $ans3
 * @property string $ans4
 * @property int $correct_ans
 * @property int $type
 * @property string|null $image
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $user_id
 * @property int $status
 */
class Qlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'level_id', 'qcontent', 'ans1', 'ans2', 'ans3', 'ans4', 'correct_ans', 'user_id'], 'required'],
            [['subject_id', 'level_id', 'correct_ans', 'type', 'user_id', 'status'], 'default', 'value' => null],
            [['subject_id', 'level_id', 'correct_ans', 'type', 'user_id', 'status'], 'integer'],
            [['qcontent'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['ans1', 'ans2', 'ans3', 'ans4', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_id' => 'Fanni tanlang',
            'level_id' => 'Savol darajasi(1,2,3)',
            'qcontent' => 'Savol',
            'ans1' => 'Variant A',
            'ans2' => 'Variant B',
            'ans3' => 'Variant C',
            'ans4' => 'Variant D',
            'correct_ans' => 'To\'g\'ri javobni tanlang',
            'type' => 'Savol turi',
            'image' => 'Rasim',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }
}
