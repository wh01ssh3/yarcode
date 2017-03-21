<?php

use yii\db\Migration;

/**
 * Handles adding date to table `portfolio`.
 */
class m170321_063837_add_date_column_to_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('portfolio', 'date', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('portfolio', 'date');
    }
}
