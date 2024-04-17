<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $product_image
 * @property string $product_name
 * @property int|null $order_range
 * @property float|null $price_per_month
 * @property float|null $single_lunchbox_price
 * @property float|null $trial_lunchbox_price
 * @property string $delivery_type
 * @property string|null $delivery_days
 * @property string|null $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'delivery_type'], 'required'],
            [['order_range'], 'integer'],
            [['price_per_month', 'single_lunchbox_price', 'trial_lunchbox_price'], 'number'],
            [['description'], 'string'],
            [['product_image', 'product_name', 'delivery_type', 'delivery_days'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_image' => 'Product Image',
            'product_name' => 'Product Name',
            'order_range' => 'Order Range',
            'price_per_month' => 'Price Per Month',
            'single_lunchbox_price' => 'Single Lunchbox Price',
            'trial_lunchbox_price' => 'Trial Lunchbox Price',
            'delivery_type' => 'Delivery Type',
            'delivery_days' => 'Delivery Days',
            'description' => 'Description',
        ];
    }
}
