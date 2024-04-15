<?php

use yii\db\Migration;

/**
 * Class m240414_135213_delivery_personnel
 */
class m240414_135213_delivery_personnel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%delivery_personnel}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'contact_info' => $this->string()->notNull(),
            'availability' => $this->boolean()->defaultValue(false),
            'image' => $this->string(),
            'group' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240414_135213_delivery_personnel cannot be reverted.\n";
        $this->dropTable('{{%delivery_personnel}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240414_135213_delivery_personnel cannot be reverted.\n";

        return false;
    }
    */
}
