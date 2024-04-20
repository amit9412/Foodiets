<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $vendor_id
 * @property int $delivery_personnel_id
 * @property string $order_date
 * @property string|null $delivery_date
 * @property string $status
 *
 * @property Customer $customer
 * @property DeliveryPersonnel $deliveryPersonnel
 * @property Vendor $vendor
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'vendor_id', 'delivery_personnel_id', 'order_date', 'status'], 'required'],
            [['customer_id', 'vendor_id', 'delivery_personnel_id'], 'integer'],
            [['order_date', 'delivery_date'], 'safe'],
            [['status'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
            [['delivery_personnel_id'], 'exist', 'skipOnError' => true, 'targetClass' => DeliveryPersonnel::class, 'targetAttribute' => ['delivery_personnel_id' => 'id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['vendor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'vendor_id' => 'Vendor ID',
            'delivery_personnel_id' => 'Delivery Personnel ID',
            'order_date' => 'Order Date',
            'delivery_date' => 'Delivery Date',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[DeliveryPersonnel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryPersonnel()
    {
        return $this->hasOne(DeliveryPersonnel::class, ['id' => 'delivery_personnel_id']);
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::class, ['id' => 'vendor_id']);
    }
}
