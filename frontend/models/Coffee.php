<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "coffee".
 *
 * @property int $id
 * @property string $name
 * @property float $amount
 * @property int $send
 * @property int $pin
 */
class Coffee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coffee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'amount', 'send', 'pin'], 'required'],
            [['amount'], 'number'],
            [['send', 'pin'], 'integer'],
            [['send'], 'string', 'min' => 10],
            [['send'], 'string', 'max' => 14],
            [['amount'], 'string', 'min' => 3],
            [['pin'], 'string', 'min' => 4],
            [['pin'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 50],
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
            'amount' => 'Amount',
            'send' => 'Send',
            'pin' => 'Pin',
        ];
    }
}
