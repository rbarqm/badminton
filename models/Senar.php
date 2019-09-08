<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "senar".
 *
 * @property int $ID
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
            [['STRING_CATEGORY', 'STRING_FEELING'], 'string'],
            [['STRING_DIAMETER'], 'number'],
            [['POINT_REPULSION_POWER', 'POINT_DURABILITY', 'POINT_HITTING_SOUND', 'POINT_SHOCK_ABSORPTION', 'POINT_CONTROL', 'AVERAGE_PRICE'], 'integer'],
            [['STRING_NAME'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'STRING_NAME' => 'Nama',
            'STRING_CATEGORY' => 'Kategori',
            'STRING_FEELING' => 'Feel',
            'STRING_DIAMETER' => 'Diameter',
            'POINT_REPULSION_POWER' => 'Nilai Kekuatan Tolakan',
            'POINT_DURABILITY' => 'Nilai Durabiliti',
            'POINT_HITTING_SOUND' => 'Nilai Suara Pukulan',
            'POINT_SHOCK_ABSORPTION' => 'Nilai Redaman Pukulan',
            'POINT_CONTROL' => 'Nilai Kontrol',
            'AVERAGE_PRICE' => 'Harga (dalam Rupiah)',
        ];
    }
}
