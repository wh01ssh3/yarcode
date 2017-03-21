<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m170319_160724_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'message' => $this->text()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact');
    }
}
