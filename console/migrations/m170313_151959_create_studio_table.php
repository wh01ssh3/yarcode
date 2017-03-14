<?php

use yii\db\Migration;

/**
 * Handles the creation of table `studio`.
 */
class m170313_151959_create_studio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('studio', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('studio');
    }
}
