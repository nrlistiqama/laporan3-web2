<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_006".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa006 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_006';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 20],
            [['nama', 'jurusan'], 'string', 'max' => 25],
            [['kelas'], 'string', 'max' => 1],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfilnim()
    {
        //same as above
        return $this->hasOne(Profil006::class, ['id_mahasiswa' => 'id']);
    }
}
