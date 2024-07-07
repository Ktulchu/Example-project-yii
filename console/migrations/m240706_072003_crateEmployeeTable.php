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
    public function safeUp(): void
    {
        $tableOptions = null;
        if ( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{employee}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'attestation_date' => $this->date(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%employee}}');
    }
}
