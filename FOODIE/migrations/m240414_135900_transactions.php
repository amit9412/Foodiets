<?php

use yii\db\Migration;

/**
 * Class m240414_135900_transactions
 */
class m240414_135900_transactions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'vendor_id' => $this->integer()->notNull(),
            'amount' => $this->decimal(10, 2)->notNull(),
            'date' => $this->dateTime()->notNull(),
            'status' => $this->string()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-transaction-customer_id',
            '{{%transaction}}',
            'customer_id',
            '{{%customer}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-transaction-vendor_id',
            '{{%transaction}}',
            'vendor_id',
            '{{%vendor}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135900_transactions cannot be reverted.\n";
        $this->dropTable('{{%transaction}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135900_transactions cannot be reverted.\n";

        return false;
    }
    */
}
