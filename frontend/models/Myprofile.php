<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "myprofile".
 *
 * @property int $id
 * @property string $number
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property int $passport
 * @property string $country
 * @property string $city
 * @property string $town
 * @property int $dob
 * @property int $physicaladdress
 */
class Myprofile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myprofile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'firstname', 'middlename', 'lastname', 'passport', 'country', 'city', 'town', 'dob', 'physicaladdress'], 'required'],
            [['passport', 'dob', 'physicaladdress'], 'integer'],
            [['number', 'lastname', 'city', 'town'], 'string', 'max' => 50],
            [['firstname', 'middlename'], 'string', 'max' => 100],
            [['country'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
           'id' => 'ID',
            'number' => 'Number',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'passport' => 'Passport',
            'country' => 'Country',
            'city' => 'City',
            'town' => 'Town',
            'dob' => 'Dob',
            'physicaladdress' => 'Physicaladdress',
        ];
    }
}
