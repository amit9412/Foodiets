<?php

use yii\db\Migration;

/**
 * Class m240414_134927_customer
 */
class m240414_134927_customer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Inside the up() method
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->unique()->notNull(),
            'aadhar_card' => $this->string()->notNull(),
            'profile_image' => $this->string(),
            'phone_number' => $this->string(),
            'address_city' => $this->string(),
            'address_state' => $this->string(),
            // ... other customer-specific fields
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_134927_customer cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_134927_customer cannot be reverted.\n";

        return false;
    }
    */
}
