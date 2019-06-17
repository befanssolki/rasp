<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id_group
 * @property string $number
 * @property string $spec
 * @property int $count_student
 * @property int $kurs
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_student', 'kurs'], 'integer'],
            [['number', 'spec'], 'string', 'max' => 50],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_group' => 'ID',
            'number' => 'Номер группы',
            'spec' => 'Специализация',
            'count_student' => 'Количество студентов',
            'kurs' => 'Курс',
        ];
    }
}
