<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing".
 *
 * @property int $id
 * @property string $driver
 * @property string $fleet
 * @property string $item_name
 * @property string $item_total
 * @property string $item_code
 * @property string $total_price
 * @property string $invoice
 * @property string $note
 */
class Billing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by'], 'integer'],
            [['driver', 'item_name', 'item_total', 'total_price'], 'required'],
            [['total_price'], 'number', 'numberPattern' => '/[0-9]|\./'],
            [['driver', 'item_name', 'item_code', 'invoice'], 'string', 'max' => 64],
            ['driver', 'match', 'pattern' => '/^[A-Za-z0-9,. _]{3,64}$/', 'message' => "The driver name only contain alphanumeric, '.',',' and at least 3 characters e.g: Kevin Pardosi, A.Md"],            
            [['fleet'], 'string', 'max' => 11],
            // ['fleet', 'match', 'pattern' => '/^[A-B][B-M]?\s[0-9]{4}\s[A-Z]{2,3}$/', 'message' => "License Plate should only contain letters and numbers, 'space' and leading A-B, and second char B-M e.g: BK 2019 MDN"],
            [['created_at', 'updated_at'], 'safe'],
            [['item_total'], 'string', 'max' => 7],
            ['item_total', 'match', 'pattern' => '/^[^0]\d{0,6}$/', 'message' => "The number of item total should be in range 1-9.999.999 e.g: 3"],
            [['note'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'driver' => 'Driver',
            'fleet' => 'Fleet',
            'item_name' => 'Item Name',
            'item_total' => 'Item Total',
            'item_code' => 'Item Code',
            'total_price' => 'Total Price',
            'invoice' => 'Invoice',
            'note' => 'Note',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By'
        ];
    }

    public function beforeSave($insert) {
        if ($insert) {
            $this->created_at = Yii::$app->formatter->asDate(strtotime($this->created_at), "php:Y-m-d H:i:s");
            $this->updated_at = Yii::$app->formatter->asTime(strtotime($this->updated_at), "php:Y-m-d H:i:s");
        }
        return parent::beforeSave($insert);
    }
}
