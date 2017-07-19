<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "packs".
 *
 * @property integer $pack_id
 * @property integer $member_member_id
 * @property string $blood_group
 * @property string $packed_date
 * @property string $expiry_date
 * @property string $packed_place_name
 *
 * @property Member $memberMember
 */
class Packs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'packs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_member_id', 'blood_group', 'packed_date', 'expiry_date', 'packed_place_name'], 'required'],
            [['member_member_id'], 'integer'],
            [['blood_group'], 'string'],
            [['packed_date', 'expiry_date'], 'safe'],
            [['packed_place_name'], 'string', 'max' => 30],
            [['member_member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::className(), 'targetAttribute' => ['member_member_id' => 'member_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pack_id' => 'Pack ID',
            'member_member_id' => 'Member Member ID',
            'blood_group' => 'Blood Group',
            'packed_date' => 'Packed Date',
            'expiry_date' => 'Expiry Date',
            'packed_place_name' => 'Packed Place Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberMember()
    {
        return $this->hasOne(Member::className(), ['member_id' => 'member_member_id']);
    }
}
