<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property int $id
 * @property int $type
 * @property int $group_id
 * @property int $subject_id
 * @property string $begin_date
 * @property string $end_date
 * @property int $quiz_count
 * @property int $time
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $status
 * @property int $deleted
 */
class Exam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'group_id', 'subject_id', 'begin_date', 'end_date', 'quiz_count', 'time'], 'required'],
            [['type', 'group_id', 'subject_id', 'quiz_count', 'time', 'status', 'deleted'], 'default', 'value' => null],
            [['type', 'group_id', 'subject_id', 'quiz_count', 'time', 'status', 'deleted'], 'integer'],
            [['begin_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'group_id' => 'Group ID',
            'subject_id' => 'Subject ID',
            'begin_date' => 'Begin Date',
            'end_date' => 'End Date',
            'quiz_count' => 'Quiz Count',
            'time' => 'Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'deleted' => 'Deleted',
        ];
    }
}
