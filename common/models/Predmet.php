<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "predmet".
 *
 * @property int $id_predmet
 * @property string $name_predmet
 * @property int $id_prepod
 */
class Predmet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'predmet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_predmet', 'id_prepod'], 'required'],
           // [['id_prepod'], 'integer'],
            [['name_predmet','id_prepod'], 'string', 'max' => 255],
            [['name_predmet'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_predmet' => 'ID',
            'name_predmet' => 'Название',
            'id_prepod' => 'Преподаватель',
        ];
    }
}
