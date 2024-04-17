<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact_email
 * @property string $contact_phone
 * @property int|null $approved
 * @property string $aadhar_card
 * @property string $pan_card
 * @property string|null $dob
 * @property string $city
 * @property string $state
 * @property string|null $status
 * @property string|null $bank_name
 * @property string|null $bank_number
 * @property string|null $bank_account_number
 * @property string|null $bank_ifsc
 *
 * @property Invoice[] $invoices
 * @property Order[] $orders
 * @property Transaction[] $transactions
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'contact_email', 'contact_phone', 'aadhar_card', 'pan_card', 'city', 'state'], 'required'],
            [['address'], 'string'],
            [['approved'], 'integer'],
            [['dob'], 'safe'],
            [['name', 'contact_email', 'contact_phone', 'aadhar_card', 'pan_card', 'city', 'state', 'status', 'bank_name', 'bank_number', 'bank_account_number', 'bank_ifsc'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'contact_email' => 'Contact Email',
            'contact_phone' => 'Contact Phone',
            'approved' => 'Approved',
            'aadhar_card' => 'Aadhar Card',
            'pan_card' => 'Pan Card',
            'dob' => 'Dob',
            'city' => 'City',
            'state' => 'State',
            'status' => 'Status',
            'bank_name' => 'Bank Name',
            'bank_number' => 'Bank Number',
            'bank_account_number' => 'Bank Account Number',
            'bank_ifsc' => 'Bank Ifsc',
        ];
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::class, ['vendor_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['vendor_id' => 'id']);
    }

    /**
     * Gets query for [[Transactions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::class, ['vendor_id' => 'id']);
    }
}
