<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand_raket".
 *
 * @property int $ID
 * @property string $BRAND
 * @property string $ACTIVE
 *
 * @property Raket[] $rakets
 */
class BrandRaket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_raket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACTIVE'], 'string'],
            [['BRAND'], 'string', 'max' => 50],
            [['BRAND'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'BRAND' => 'Brand',
            'ACTIVE' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRakets()
    {
        return $this->hasMany(Raket::className(), ['BRAND' => 'BRAND']);
    }
}
