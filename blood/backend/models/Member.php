<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $member_id
 * @property string $member_name
 * @property integer $member_age
 * @property string $member_gender
 * @property string $member_contact_no
 * @property string $member_address
 * @property double $member_height
 * @property integer $member_weight
 * @property string $member_bloog_group
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'member_age', 'member_gender', 'member_contact_no', 'member_address', 'member_height', 'member_weight', 'member_bloog_group'], 'required'],
            [['member_age', 'member_contact_no', 'member_weight'], 'integer'],
            [['member_gender', 'member_address', 'member_bloog_group'], 'string'],
            [['member_height'], 'number'],
            [['member_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'member_name' => 'Member Name',
            'member_age' => 'Member Age',
            'member_gender' => 'Member Gender',
            'member_contact_no' => 'Member Contact No',
            'member_address' => 'Member Address',
            'member_height' => 'Member Height',
            'member_weight' => 'Member Weight',
            'member_bloog_group' => 'Member Bloog Group',
        ];
    }
}
