<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs006".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa006
 * @property string $nama_mahasiswa006
 * @property string $kelas006
 * @property string $status006
 */
class Mhs006 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs006';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa006', 'nama_mahasiswa006', 'kelas006', 'status006'], 'required'],
            [['no_induk_mahasiswa006', 'nama_mahasiswa006', 'kelas006', 'status006'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id006' => 'ID',
            'no_induk_mahasiswa006' => 'No Induk Mahasiswa006',
            'nama_mahasiswa006' => 'Nama Mahasiswa006',
            'kelas006' => 'Kelas006',
            'status006' => 'Status006',
        ];
    }
}
