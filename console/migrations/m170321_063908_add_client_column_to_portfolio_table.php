<?php

use yii\db\Migration;

/**
 * Handles adding client to table `portfolio`.
 */
class m170321_063908_add_client_column_to_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('portfolio', 'client', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('portfolio', 'client');
    }
}
