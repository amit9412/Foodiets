<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%customer}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $status
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%customer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'mobile', 'status'], 'required'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['mobile'], 'string', 'max' => 15],
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
            'email' => 'Email',
            'mobile' => 'Mobile',
            'status' => 'Status',
        ];
    }
}
