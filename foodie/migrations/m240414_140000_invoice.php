<?php

use yii\db\Migration;

/**
 * Class m240414_140000_invoice
 */
class m240414_140000_invoice extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%invoice}}', [
            'id' => $this->primaryKey(),
            'vendor_id' => $this->integer()->notNull(),
            'customer_id' => $this->integer()->notNull(),
            'amount' => $this->decimal(10, 2)->notNull(),
            'invoice_date' => $this->dateTime()->notNull(),
            'status' => $this->string()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-invoice-vendor_id',
            '{{%invoice}}',
            'vendor_id',
            '{{%vendor}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-invoice-customer_id',
            '{{%invoice}}',
            'customer_id',
            '{{%customer}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_140000_invoice cannot be reverted.\n";
        $this->dropTable('{{%invoice}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_140000_invoice cannot be reverted.\n";

        return false;
    }
    */
}
