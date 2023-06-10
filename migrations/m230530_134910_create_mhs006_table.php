<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs006}}`.
 */
class m230530_134910_create_mhs006_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs006}}', [
            'id006' => $this->primaryKey(),
            'no_induk_mahasiswa006' => $this->string()->notNull(),
            'nama_mahasiswa006' => $this->string()->notNull(),
            'kelas006' => $this->string()->notNull(),
            'status006' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs006}}');
    }
}
