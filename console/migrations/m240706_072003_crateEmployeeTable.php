<?php

use yii\db\Migration;

/**
 * Class m240706_072003_crateEmployeeTable
 */
class m240706_072003_crateEmployeeTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240706_072003_crateEmployeeTable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240706_072003_crateEmployeeTable cannot be reverted.\n";

        return false;
    }
    */
}
