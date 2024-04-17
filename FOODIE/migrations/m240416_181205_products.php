<?php

use yii\db\Migration;

/**
 * Class m240416_181205_products
 */
class m240416_181205_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'product_image' => $this->string(),
            'product_name' => $this->string()->notNull(),
            'order_range' => $this->integer(),
            'price_per_month' => $this->float(),
            'single_lunchbox_price' => $this->float(),
            'trial_lunchbox_price' => $this->float(),
            'delivery_type' => $this->string()->notNull(), // Not strictly an ENUM
            'delivery_days' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240416_181205_products cannot be reverted.\n";
        $this->dropTable('products');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240416_181205_products cannot be reverted.\n";

        return false;
    }
    */
}
