<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $aadhar_card
 * @property string|null $profile_image
 * @property string|null $phone_number
 * @property string|null $address_city
 * @property string|null $address_state
 *
 * @property Invoice[] $invoices
 * @property Order[] $orders
 * @property Transaction[] $transactions
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'aadhar_card'], 'required'],
            [['name', 'email', 'aadhar_card', 'profile_image', 'phone_number', 'address_city', 'address_state'], 'string', 'max' => 255],
            [['email'], 'unique'],
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
            'aadhar_card' => 'Aadhar Card',
            'profile_image' => 'Profile Image',
            'phone_number' => 'Phone Number',
            'address_city' => 'Address City',
            'address_state' => 'Address State',
        ];
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::class, ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[Transactions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::class, ['customer_id' => 'id']);
    }
}
