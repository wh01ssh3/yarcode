<?php

use yii\db\Migration;

/**
 * Handles adding category to table `portfolio`.
 */
class m170321_063000_add_category_column_to_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('portfolio', 'category', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('portfolio', 'category');
    }
}
