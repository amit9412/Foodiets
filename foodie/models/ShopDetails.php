<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_detail".
 *
 * @property int $id
 * @property string|null $owner_image
 * @property string $shop_name
 * @property string $email_id
 * @property string|null $landline_number
 * @property string $mobile_number
 * @property string $shop_address
 * @property string|null $GST
 * @property string|null $shop_documents
 * @property string|null $certification
 */
class ShopDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shop_name', 'email_id', 'mobile_number', 'shop_address'], 'required'],
            [['shop_address', 'shop_documents', 'certification'], 'string'],
            [['owner_image', 'shop_name', 'email_id', 'landline_number', 'mobile_number', 'GST'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_image' => 'Owner Image',
            'shop_name' => 'Shop Name',
            'email_id' => 'Email ID',
            'landline_number' => 'Landline Number',
            'mobile_number' => 'Mobile Number',
            'shop_address' => 'Shop Address',
            'GST' => 'Gst',
            'shop_documents' => 'Shop Documents',
            'certification' => 'Certification',
        ];
    }
}
