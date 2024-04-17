<?php

use yii\db\Migration;

/**
 * Class m240414_135139_vendor
 */
class m240414_135139_vendor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vendor}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'address' => $this->text()->notNull(),
            'contact_email' => $this->string()->notNull(),
            'contact_phone' => $this->string()->notNull(),
            'approved' => $this->boolean()->defaultValue(false),
            'aadhar_card' => $this->string()->notNull(),
            'pan_card' => $this->string()->notNull(),
            'dob' => $this->date(),
            'city' => $this->string()->notNull(),
            'state' => $this->string()->notNull(),
            'status' => $this->string()->defaultValue('not verified'),
            'bank_name' => $this->string(),
            'bank_number' => $this->string(),
            'bank_account_number' => $this->string(),
            'bank_ifsc' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135139_vendor cannot be reverted.\n";
        $this->dropTable('{{%vendor}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135139_vendor cannot be reverted.\n";

        return false;
    }
    */
}
