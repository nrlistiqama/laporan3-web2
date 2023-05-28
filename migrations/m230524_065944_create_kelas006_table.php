<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kelas006}}`.
 */
class m230524_065944_create_kelas006_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelas006}}', [
            'id' => $this->primaryKey(),
            'semester' => $this->integer()->notNull(),
            'nama_kelas' => $this->string()->notNull(),
            'peserta' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kelas006}}');
    }
}
