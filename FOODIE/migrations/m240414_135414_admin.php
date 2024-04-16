<?php

use yii\db\Migration;

/**
 * Class m240414_135414_admin
 */
class m240414_135414_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%super_admin}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'profile_image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135414_admin cannot be reverted.\n";
        $this->dropTable('{{%super_admin}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135414_admin cannot be reverted.\n";

        return false;
    }
    */
}
