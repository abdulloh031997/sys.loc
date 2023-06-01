<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $code_hems
 * @property string $full_name
 * @property string $fuqorolik
 * @property string $davlat
 * @property string $millat
 * @property string $region
 * @property string $tuman
 * @property string $jins
 * @property string $bdate
 * @property string $pasport
 * @property int $imie
 * @property string $fakultet
 * @property string $group_name
 * @property string $mvdir
 * @property string $emode_name
 * @property string $utype
 * @property int $status
 * @property int|null $group_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_hems', 'full_name', 'fuqorolik', 'davlat', 'millat', 'region', 'tuman', 'jins', 'bdate', 'pasport', 'imie', 'fakultet', 'group_name', 'mvdir', 'emode_name', 'utype'], 'required'],
            [['code_hems', 'imie', 'status', 'group_id'], 'default', 'value' => null],
            [['code_hems', 'imie', 'status', 'group_id'], 'integer'],
            [['bdate'], 'safe'],
            [['full_name', 'fuqorolik', 'davlat', 'millat', 'region', 'tuman', 'jins', 'pasport', 'fakultet', 'group_name', 'mvdir', 'emode_name', 'utype'], 'string', 'max' => 255],
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
            'full_name' => 'Full Name',
            'fuqorolik' => 'Fuqorolik',
            'davlat' => 'Davlat',
            'millat' => 'Millat',
            'region' => 'Region',
            'tuman' => 'Tuman',
            'jins' => 'Jins',
            'bdate' => 'Bdate',
            'pasport' => 'Pasport',
            'imie' => 'Imie',
            'fakultet' => 'Fakultet',
            'group_name' => 'Group Name',
            'mvdir' => 'Mvdir',
            'emode_name' => 'Emode Name',
            'utype' => 'Utype',
            'status' => 'Status',
            'group_id' => 'Group ID',
        ];
    }
    public function getShartnoma()
    {
        return $this->hasOne(Shartnoma::class, ['student_id' => 'id']);
    }
}
