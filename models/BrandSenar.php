<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand_senar".
 *
 * @property int $ID ID
 * @property string $BRAND Merek
 * @property string $ACTIVE Aktif
 *
 * @property Senar[] $senars
 */
class BrandSenar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_senar';
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
    public function getSenars()
    {
        return $this->hasMany(Senar::className(), ['STRING_BRAND' => 'BRAND']);
    }
}
