<?php

use yii\db\Migration;

/**
 * Class m240414_135917_order
 */
class m240414_135917_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'vendor_id' => $this->integer()->notNull(),
            'delivery_personnel_id' => $this->integer()->notNull(),
            'order_date' => $this->dateTime()->notNull(),
            'delivery_date' => $this->dateTime(),
            'status' => $this->string()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-order-customer_id',
            '{{%order}}',
            'customer_id',
            '{{%customer}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-order-vendor_id',
            '{{%order}}',
            'vendor_id',
            '{{%vendor}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-order-delivery_personnel_id',
            '{{%order}}',
            'delivery_personnel_id',
            '{{%delivery_personnel}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135917_order cannot be reverted.\n";
        $this->dropTable('{{%order}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135917_order cannot be reverted.\n";

        return false;
    }
    */
}
