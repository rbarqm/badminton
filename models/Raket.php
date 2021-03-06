<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raket".
 *
 * @property int $ID
 * @property string $BRAND Merek
 * @property string $NAME Nama
 * @property string $CATEGORY Kategori
 * @property string $WEIGHT Berat
 * @property string $GRIP Grip
 * @property int $MAX_TENSION Tarikan Maksimum
 * @property int $PRICE Harga
 *
 * @property BrandRaket $bRAND
 */
class Raket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'raket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CATEGORY', 'WEIGHT', 'GRIP'], 'string'],
            [['MAX_TENSION', 'PRICE'], 'integer'],
            [['BRAND', 'NAME'], 'string', 'max' => 50],
            [['NAME', 'CATEGORY', 'WEIGHT', 'GRIP', 'MAX_TENSION', 'BRAND'], 'unique', 'targetAttribute' => ['NAME', 'CATEGORY', 'WEIGHT', 'GRIP', 'MAX_TENSION', 'BRAND']],
            [['BRAND'], 'exist', 'skipOnError' => true, 'targetClass' => BrandRaket::className(), 'targetAttribute' => ['BRAND' => 'BRAND']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'BRAND' => 'Merek',
            'NAME' => 'Nama',
            'CATEGORY' => 'Kategori',
            'WEIGHT' => 'Berat',
            'GRIP' => 'Grip',
            'MAX_TENSION' => 'Tarikan Maksimum',
            'PRICE' => 'Harga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBRAND()
    {
        return $this->hasOne(BrandRaket::className(), ['BRAND' => 'BRAND']);
    }
}
