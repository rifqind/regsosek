<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k_art".
 *
 * @property int $id
 * @property int $id_rt
 * @property string|null $r101
 * @property string|null $r102
 * @property string|null $r103
 * @property string|null $r104
 * @property string|null $r105
 * @property string|null $r106
 * @property int|null $r401
 * @property string|null $r402
 * @property string|null $r403
 * @property int|null $r404
 * @property int|null $r405
 * @property int|null $r406tgl
 * @property int|null $r406bln
 * @property int|null $r406thn
 * @property int|null $r407
 * @property int|null $r408
 * @property int|null $r409
 * @property int|null $r410
 * @property int|null $r411
 * @property int|null $r412
 * @property int|null $r413
 * @property int|null $r414
 * @property int|null $r415
 * @property int|null $r416
 * @property int|null $r416a
 * @property int|null $r416b
 * @property int|null $r417
 * @property int|null $r418
 * @property int|null $r419
 * @property int|null $r420
 * @property int|null $r421
 * @property int|null $r422
 * @property int|null $r423
 * @property int|null $r424
 * @property int|null $r425
 * @property int|null $r426
 * @property int|null $r427
 * @property int|null $r428a
 * @property int|null $r428b
 * @property int|null $r428c
 * @property int|null $r428d
 * @property int|null $r428e
 * @property int|null $r428f
 * @property int|null $r428g
 * @property int|null $r428h
 * @property int|null $r428i
 * @property int|null $r428j
 * @property int|null $r429
 * @property int|null $r430
 * @property int|null $r431a
 * @property int|null $r431b
 * @property int|null $r431c
 * @property int|null $r431d
 * @property int|null $r431e
 * @property int|null $r431f
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property KRt $rt
 */
class Kart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k_art';
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
            [['id_rt'], 'required'],
            [['id_rt', 'r401', 'r404', 'r405', 'r406tgl', 'r406bln', 'r406thn', 'r407', 'r408', 'r409', 'r410', 'r411', 'r412', 'r413', 'r414', 'r415', 'r416', 'r416a', 'r416b', 'r418', 'r419', 'r420', 'r422', 'r423', 'r424', 'r425', 'r426', 'r427', 'r428a', 'r428b', 'r428c', 'r428d', 'r428e', 'r428f', 'r428g', 'r428h', 'r428i', 'r428j', 'r429', 'r430', 'r431a', 'r431b', 'r431c', 'r431d', 'r431e', 'r431f'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['r101', 'r102'], 'string', 'max' => 2],
            [['r103', 'r104'], 'string', 'max' => 3],
            [['r402', 'r417_desk','r421_desk' ], 'filter', 'filter'=>'strtoupper'],
            [['r105'], 'string', 'max' => 6],
            [['r106', 'r402', 'r403', 'r417', 'r417_desk', 'r421',  'r421_desk'], 'string', 'max' => 255],
            [['id_rt'], 'exist', 'skipOnError' => true, 'targetClass' => Krt::class, 'targetAttribute' => ['id_rt' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_rt' => 'Id Rt',
            'r101' => 'R101',
            'r102' => 'R102',
            'r103' => 'R103',
            'r104' => 'R104',
            'r105' => 'R105',
            'r106' => 'R106',
            'r401' => 'R401',
            'r402' => 'R402',
            'r403' => 'R403',
            'r404' => 'R404',
            'r405' => 'R405',
            'r406tgl' => 'R406tgl',
            'r406bln' => 'R406bln',
            'r406thn' => 'R406thn',
            'r407' => 'R407',
            'r408' => 'R408',
            'r409' => 'R409',
            'r410' => 'R410',
            'r411' => 'R411',
            'r412' => 'R412',
            'r413' => 'R413',
            'r414' => 'R414',
            'r415' => 'R415',
            'r416' => 'R416',
            'r416a' => 'R416a',
            'r416b' => 'R416b',
            'r417' => 'R417',
            'r417' => 'R417 Deskripsi',
            'r418' => 'R418',
            'r419' => 'R419',
            'r420' => 'R420',
            'r421' => 'R421',
            'r421' => 'R421 Deskripsi',
            'r422' => 'R422',
            'r423' => 'R423',
            'r424' => 'R424',
            'r425' => 'R425',
            'r426' => 'R426',
            'r427' => 'R427',
            'r428a' => 'R428a',
            'r428b' => 'R428b',
            'r428c' => 'R428c',
            'r428d' => 'R428d',
            'r428e' => 'R428e',
            'r428f' => 'R428f',
            'r428g' => 'R428g',
            'r428h' => 'R428h',
            'r428i' => 'R428i',
            'r428j' => 'R428j',
            'r429' => 'R429',
            'r430' => 'R430',
            'r431a' => 'R431a',
            'r431b' => 'R431b',
            'r431c' => 'R431c',
            'r431d' => 'R431d',
            'r431e' => 'R431e',
            'r431f' => 'R431f',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Rt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRt()
    {
        return $this->hasOne(Krt::class, ['id' => 'id_rt']);
    }
}
