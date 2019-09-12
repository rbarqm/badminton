<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "senar".
 *
 * @property int $ID
 * @property string $STRING_BRAND
 * @property string $STRING_NAME Nama
 * @property string $STRING_CATEGORY Kategori
 * @property string $STRING_FEELING Feel
 * @property double $STRING_DIAMETER Diameter
 * @property int $POINT_REPULSION_POWER Nilai Kekuatan Tolakan
 * @property int $POINT_DURABILITY Nilai Durabiliti
 * @property int $POINT_HITTING_SOUND Nilai Suara Pukulan
 * @property int $POINT_SHOCK_ABSORPTION Nilai Redaman Pukulan
 * @property int $POINT_CONTROL Nilai Kontrol
 * @property int $AVERAGE_PRICE Harga (dalam Rupiah)
 *
 * @property BrandSenar $sTRINGBRAND
 */
class Senar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'senar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STRING_BRAND', 'STRING_NAME'], 'required'],
            [['STRING_CATEGORY', 'STRING_FEELING'], 'string'],
            [['STRING_DIAMETER'], 'number'],
            [['POINT_REPULSION_POWER', 'POINT_DURABILITY', 'POINT_HITTING_SOUND', 'POINT_SHOCK_ABSORPTION', 'POINT_CONTROL', 'AVERAGE_PRICE'], 'integer'],
            [['STRING_BRAND', 'STRING_NAME'], 'string', 'max' => 50],
            [['STRING_BRAND', 'STRING_CATEGORY', 'STRING_FEELING', 'STRING_DIAMETER', 'STRING_NAME'], 'unique', 'targetAttribute' => ['STRING_BRAND', 'STRING_CATEGORY', 'STRING_FEELING', 'STRING_DIAMETER', 'STRING_NAME']],
            [['STRING_BRAND'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSenar::className(), 'targetAttribute' => ['STRING_BRAND' => 'BRAND']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'STRING_BRAND' => 'String Brand',
            'STRING_NAME' => 'String Name',
            'STRING_CATEGORY' => 'String Category',
            'STRING_FEELING' => 'String Feeling',
            'STRING_DIAMETER' => 'String Diameter',
            'POINT_REPULSION_POWER' => 'Point Repulsion Power',
            'POINT_DURABILITY' => 'Point Durability',
            'POINT_HITTING_SOUND' => 'Point Hitting Sound',
            'POINT_SHOCK_ABSORPTION' => 'Point Shock Absorption',
            'POINT_CONTROL' => 'Point Control',
            'AVERAGE_PRICE' => 'Average Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTRINGBRAND()
    {
        return $this->hasOne(BrandSenar::className(), ['BRAND' => 'STRING_BRAND']);
    }
}
