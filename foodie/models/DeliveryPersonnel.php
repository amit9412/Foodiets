<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "delivery_personnel".
 *
 * @property int $id
 * @property string $name
 * @property string $contact_info
 * @property int|null $availability
 * @property string|null $image
 * @property string|null $group
 *
 * @property Order[] $orders
 */
class DeliveryPersonnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivery_personnel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact_info'], 'required'],
            [['availability'], 'integer'],
            [['name', 'contact_info', 'image', 'group'], 'string', 'max' => 255],
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
            'contact_info' => 'Contact Info',
            'availability' => 'Availability',
            'image' => 'Image',
            'group' => 'Group',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['delivery_personnel_id' => 'id']);
    }
}
