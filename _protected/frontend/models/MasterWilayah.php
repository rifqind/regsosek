<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_wilayah".
 *
 * @property int|null $id
 * @property int|null $kode_prov
 * @property string|null $nama_prov
 * @property string|null $kode_kab
 * @property int|null $id_kab
 * @property string|null $nama_kab
 * @property string|null $kode_kec
 * @property int|null $id_kec
 * @property string|null $nama_kec
 * @property string|null $kode_desa
 * @property int|null $id_desa
 * @property string|null $nama_desa
 * @property string|null $kode_sls6
 * @property string|null $kode_sls4
 * @property int|null $id_sls
 * @property string|null $nama_sls
 * @property string|null $operasional
 * @property string|null $jenis_sls
 */
class MasterWilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_prov', 'id_kab', 'id_kec', 'id_desa', 'id_sls'], 'integer'],
            [['nama_prov'], 'string', 'max' => 14],
            [['kode_kab'], 'string', 'max' => 2],
            [['nama_kab'], 'string', 'max' => 25],
            [['kode_kec', 'kode_desa'], 'string', 'max' => 3],
            [['nama_kec'], 'string', 'max' => 24],
            [['nama_desa'], 'string', 'max' => 23],
            [['kode_sls6', 'jenis_sls'], 'string', 'max' => 6],
            [['kode_sls4'], 'string', 'max' => 4],
            [['nama_sls'], 'string', 'max' => 50],
            [['operasional'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_prov' => 'Kode Prov',
            'nama_prov' => 'Nama Prov',
            'kode_kab' => 'Kode Kab',
            'id_kab' => 'Id Kab',
            'nama_kab' => 'Nama Kab',
            'kode_kec' => 'Kode Kec',
            'id_kec' => 'Id Kec',
            'nama_kec' => 'Nama Kec',
            'kode_desa' => 'Kode Desa',
            'id_desa' => 'Id Desa',
            'nama_desa' => 'Nama Desa',
            'kode_sls6' => 'Kode Sls6',
            'kode_sls4' => 'Kode Sls4',
            'id_sls' => 'Id Sls',
            'nama_sls' => 'Nama Sls',
            'operasional' => 'Operasional',
            'jenis_sls' => 'Jenis Sls',
        ];
    }
}
