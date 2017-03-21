<?php

use yii\db\Migration;

/**
 * Handles adding category to table `portfolio`.
 */
class m170321_062658_add_category_column_to_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('category', 'position', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
