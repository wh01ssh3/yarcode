<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m170313_152202_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('portfolio', [
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
        $this->dropTable('portfolio');
    }
}
