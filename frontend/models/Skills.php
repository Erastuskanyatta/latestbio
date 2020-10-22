<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $name
 * @property string $tittle
 * @property string $description
 * @property string $skillsid
 * @property string $createddate
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tittle', 'description', 'skillsid'], 'required'],
            [['createddate'], 'safe'],
            [['name'], 'string', 'max' => 25],
            [['tittle', 'skillsid'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 5000],
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
            'tittle' => 'Tittle',
            'description' => 'Description',
            'skillsid' => 'Skillsid',
            'createddate' => 'Createddate',
        ];
    }
}
