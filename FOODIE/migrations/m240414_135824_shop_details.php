<?php

use yii\db\Migration;

/**
 * Class m240414_135824_shop_details
 */
class m240414_135824_shop_details extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_detail}}', [
            'id' => $this->primaryKey(),
            'owner_image' => $this->string(),
            'shop_name' => $this->string()->notNull(),
            'email_id' => $this->string()->notNull(),
            'landline_number' => $this->string(),
            'mobile_number' => $this->string()->notNull(),
            'shop_address' => $this->text()->notNull(),
            'GST' => $this->string(),
            'shop_documents' => $this->text(),
            'certification' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135824_shop_details cannot be reverted.\n";
        $this->dropTable('{{%shop_details}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135824_shop_details cannot be reverted.\n";

        return false;
    }
    */
}
