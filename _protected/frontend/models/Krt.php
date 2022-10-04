<?php

namespace frontend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "k_rt".
 *
 * @property int $id
 * @property int $id_sls
 * @property string|null $r101
 * @property string|null $r102
 * @property string|null $r103
 * @property string|null $r104
 * @property string|null $r105
 * @property string|null $r106
 * @property string|null $r108
 * @property int|null $r110
 * @property int|null $r111
 * @property int|null $r112
 * @property string|null $r114
 * @property int|null $r115
 * @property int|null $r301a
 * @property int|null $r301b
 * @property int|null $r302
 * @property int|null $r303
 * @property int|null $r304
 * @property int|null $r305
 * @property int|null $r306a
 * @property int|null $r306b
 * @property int|null $r307a
 * @property int|null $r307b1
 * @property int|null $r307b2
 * @property int|null $r307b3
 * @property int|null $r308
 * @property int|null $r309a
 * @property int|null $r309b
 * @property int|null $r310
 * @property int|null $r501a
 * @property int|null $r501a_bln
 * @property int|null $r501a_thn
 * @property int|null $r501b
 * @property int|null $r501b_bln
 * @property int|null $r501b_thn
 * @property int|null $r501c
 * @property int|null $r501c_bln
 * @property int|null $r501c_thn
 * @property int|null $r501d
 * @property int|null $r501d_bln
 * @property int|null $r501d_thn
 * @property int|null $r501e
 * @property int|null $r501e_bln
 * @property int|null $r501e_thn
 * @property int|null $r502a
 * @property int|null $r502b
 * @property int|null $r502c
 * @property int|null $r502d
 * @property int|null $r502e
 * @property int|null $r502f
 * @property int|null $r502g
 * @property int|null $r502h
 * @property int|null $r502i
 * @property int|null $r502j
 * @property int|null $r502k
 * @property int|null $r502l
 * @property int|null $r502m
 * @property int|null $r502n
 * @property int|null $r503a
 * @property int|null $r503b
 * @property int|null $r504a
 * @property int|null $r504b
 * @property int|null $r504c
 * @property int|null $r504d
 * @property int|null $r504e
 * @property int|null $r505
 * @property int|null $r506
 * @property int|null $flag_error
 * @property int $flag_simpan
 * @property int|null $status_kirim
 * @property int|null $status_koseka
 * @property int|null $user
 *
 * @property KArt[] $kArts
 * @property User $user0
 */
class Krt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k_rt';
    }

    public function formName()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sls'], 'required'],
            [['id_sls', 'r110', 'r111', 'r112', 'r115', 'r301a', 'r301b', 'r302', 'r303', 'r304', 'r305', 'r306a', 'r306b', 'r307a', 'r307b1', 'r307b2', 'r307b3', 'r308', 'r309a', 'r309b', 'r310', 'r501a', 'r501a_bln', 'r501a_thn', 'r501b', 'r501b_bln', 'r501b_thn', 'r501c', 'r501c_bln', 'r501c_thn', 'r501d', 'r501d_bln', 'r501d_thn', 'r501e', 'r501e_bln', 'r501e_thn', 'r501f', 'r501f_bln', 'r501f_thn', 'r501g', 'r501g_bln', 'r501g_thn', 'r502a', 'r502b', 'r502c', 'r502d', 'r502e', 'r502f', 'r502g', 'r502h', 'r502i', 'r502j', 'r502k', 'r502l', 'r502m', 'r502n', 'r503a', 'r503b', 'r504a', 'r504b', 'r504c', 'r504d', 'r504e', 'r505', 'r506', 'flag_error', 'flag_simpan', 'status_kirim', 'status_koseka', 'user'], 'integer'],
            [['r101', 'r102'], 'string', 'max' => 2],
            [['r103', 'r104'], 'string', 'max' => 3],
            [['r105'], 'string', 'max' => 6],
            [['r108'], 'filter', 'filter'=>'strtoupper'],
            [['r106', 'r108', 'r114'], 'string', 'max' => 255],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_sls' => 'Id Sls',
            'r101' => 'R101',
            'r102' => 'R102',
            'r103' => 'R103',
            'r104' => 'R104',
            'r105' => 'R105',
            'r106' => 'R106',
            'r108' => 'R108',
            'r110' => 'R110',
            'r111' => 'R111',
            'r112' => 'R112',
            'r114' => 'R114',
            'r115' => 'R115',
            'r301a' => 'R301a',
            'r301b' => 'R301b',
            'r302' => 'R302',
            'r303' => 'R303',
            'r304' => 'R304',
            'r305' => 'R305',
            'r306a' => 'R306a',
            'r306b' => 'R306b',
            'r307a' => 'R307a',
            'r307b1' => 'R307b1',
            'r307b2' => 'R307b2',
            'r307b3' => 'R307b3',
            'r308' => 'R308',
            'r309a' => 'R309a',
            'r309b' => 'R309b',
            'r310' => 'R310',
            'r501a' => 'R501a',
            'r501a_bln' => 'R501a Bln',
            'r501a_thn' => 'R501a Thn',
            'r501b' => 'R501b',
            'r501b_bln' => 'R501b Bln',
            'r501b_thn' => 'R501b Thn',
            'r501c' => 'R501c',
            'r501c_bln' => 'R501c Bln',
            'r501c_thn' => 'R501c Thn',
            'r501d' => 'R501d',
            'r501d_bln' => 'R501d Bln',
            'r501d_thn' => 'R501d Thn',
            'r501e' => 'R501e',
            'r501e_bln' => 'R501e Bln',
            'r501e_thn' => 'R501e Thn',
            'r501f' => 'R501f',
            'r501f_bln' => 'R501f Bln',
            'r501f_thn' => 'R501f Thn',
            'r501g' => 'R501g',
            'r501g_bln' => 'R501g Bln',
            'r501g_thn' => 'R501g Thn',
            'r502a' => 'R502a',
            'r502b' => 'R502b',
            'r502c' => 'R502c',
            'r502d' => 'R502d',
            'r502e' => 'R502e',
            'r502f' => 'R502f',
            'r502g' => 'R502g',
            'r502h' => 'R502h',
            'r502i' => 'R502i',
            'r502j' => 'R502j',
            'r502k' => 'R502k',
            'r502l' => 'R502l',
            'r502m' => 'R502m',
            'r502n' => 'R502n',
            'r503a' => 'R503a',
            'r503b' => 'R503b',
            'r504a' => 'R504a',
            'r504b' => 'R504b',
            'r504c' => 'R504c',
            'r504d' => 'R504d',
            'r504e' => 'R504e',
            'r505' => 'R505',
            'r506' => 'R506',
            'flag_error' => 'Flag Error',
            'flag_simpan' => 'Flag Simpan',
            'status_kirim' => 'Status Kirim',
            'status_koseka' => 'Status Koseka',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[KArts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKarts()
    {
        return $this->hasMany(Kart::class, ['id_rt' => 'id'])->orderBy(['id' => SORT_ASC]);;
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::class, ['id' => 'user']);
    }
}
