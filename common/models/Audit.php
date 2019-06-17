<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "audit".
 *
 * @property int $id_audit
 * @property int $number_audit
 * @property string $name_audit
 * @property int $count_place
 * @property string $type_audit
 * @property int $number_korpus
 */
class Audit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_audit', 'name_audit', 'count_place', 'type_audit', 'number_korpus'], 'required'],
            [['number_audit', 'count_place', 'number_korpus'], 'integer'],
            [['name_audit'], 'string', 'max' => 50],
            [['type_audit'], 'string', 'max' => 35],
            [['number_audit'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_audit' => 'ID',
            'number_audit' => 'Номер аудитории',
            'name_audit' => 'Название',
            'count_place' => 'Количество мест',
            'type_audit' => 'Тип',
            'number_korpus' => 'Корпус',
        ];
    }
}
