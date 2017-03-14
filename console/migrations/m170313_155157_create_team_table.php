<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m170313_155157_create_team_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('team');
    }
}
