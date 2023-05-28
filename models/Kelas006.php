<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas006".
 *
 * @property int $id
 * @property int $semester
 * @property string $nama_kelas
 * @property string $peserta
 */
class Kelas006 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas006';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester', 'nama_kelas', 'peserta'], 'required'],
            [['semester'], 'integer'],
            [['nama_kelas', 'peserta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'semester' => 'Semester',
            'nama_kelas' => 'Nama Kelas',
            'peserta' => 'Peserta',
        ];
    }
}
