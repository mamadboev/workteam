<?php

use yii\db\Migration;

/**
 * Class m210828_045957_add_password_column_user
 */
class m210828_045957_add_password_column_user extends Migration
{
    const TABLE_NAME= '{{%user}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(self::TABLE_NAME,'password', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn(self::TABLE_NAME,'password');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210828_045957_add_password_column_user cannot be reverted.\n";

        return false;
    }
    */
}
