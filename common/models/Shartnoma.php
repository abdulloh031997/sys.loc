<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shartnoma".
 *
 * @property int $id
 * @property int $student_id
 * @property int $sh_raqam
 * @property int $invoice
 * @property int $emode_id
 * @property int $dir_id
 * @property int $etap
 * @property string $created_at
 * @property string|null $updated_at
 */
class Shartnoma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shartnoma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'invoice', 'emode_id', 'dir_id', 'etap'], 'required'],
            [['student_id', 'invoice', 'emode_id', 'dir_id', 'etap'], 'default', 'value' => null],
            [['student_id', 'invoice', 'emode_id', 'dir_id', 'etap'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'sh_raqam' => 'Sh Raqam',
            'invoice' => 'Invoice',
            'emode_id' => 'Emode ID',
            'dir_id' => 'Dir ID',
            'etap' => 'Etap',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
