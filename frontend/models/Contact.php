<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $contact_id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $createddate
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['createddate'], 'safe'],
            [['name', 'email'], 'string', 'max' => 250],
            [['subject', 'body'], 'string', 'max' => 1000],
            ['name', 'required'],
            [['email'], 'email'],
            [['name'], 'string', 'min' => 10],
            [['name'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'createddate' => 'Createddate',
        ];
    }
}
