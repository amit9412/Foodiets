<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%chat}}`.
 */
class m240416_191257_create_chat_table extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%chat}}', [
            'id' => $this->primaryKey(),
            'sender_id' => $this->integer()->notNull(),
            'receiver_id' => $this->integer()->notNull(),
            'message' => $this->text()->notNull(),
            'timestamp' => $this->integer()->notNull(),
            // Add more columns as needed
        ]);

        // Add foreign key constraint if necessary
        $this->addForeignKey(
            'fk-chat-sender_id',
            '{{%chat}}',
            'sender_id',
            '{{%user}}', // Assuming 'user' table for user information
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-chat-receiver_id',
            '{{%chat}}',
            'receiver_id',
            '{{%user}}', // Assuming 'user' table for user information
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Drop foreign key constraints first if necessary
        $this->dropForeignKey('fk-chat-receiver_id', '{{%chat}}');
        $this->dropForeignKey('fk-chat-sender_id', '{{%chat}}');

        // Drop the table
        $this->dropTable('{{%chat}}');
    }
}
