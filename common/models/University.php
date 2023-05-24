<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property int $id
 * @property string $name
 * @property string $hudud
 * @property string $shahar
 * @property string $stir
 * @property string $phone
 * @property string $rektor
 * @property string $otm_type
 * @property string $otm_shakil
 * @property string $pochta
 * @property string $bank_data
 * @property string $body
 * @property string $created_at
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hudud', 'shahar', 'stir', 'phone', 'rektor', 'otm_type', 'otm_shakil', 'pochta', 'bank_data', 'body'], 'required'],
            [['pochta', 'bank_data', 'body'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'hudud', 'shahar', 'stir', 'phone', 'rektor', 'otm_type', 'otm_shakil'], 'string', 'max' => 255],
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
            'hudud' => 'Hudud',
            'shahar' => 'Shahar',
            'stir' => 'Stir',
            'phone' => 'Phone',
            'rektor' => 'Rektor',
            'otm_type' => 'Otm Type',
            'otm_shakil' => 'Otm Shakil',
            'pochta' => 'Pochta',
            'bank_data' => 'Bank Data',
            'body' => 'Body',
            'created_at' => 'Created At',
        ];
    }
}
