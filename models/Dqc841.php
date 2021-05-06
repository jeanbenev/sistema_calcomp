<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dqc841".
 *
 * @property int $id
 * @property int $fat_part_no
 * @property string $parts_no
 * @property string $unt_usg
 * @property string $description
 * @property string|null $ref_designator
 * @property string $update_dt
 * @property string $create_dt
 *
 * @property Dqc84 $fatPartNo
 */
class Dqc841 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dqc841';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fat_part_no', 'parts_no', 'unt_usg', 'description'], 'required'],
            [['fat_part_no'], 'integer'],
            [['description', 'ref_designator'], 'string'],
            [['update_dt', 'create_dt'], 'safe'],
            [['parts_no', 'unt_usg'], 'string', 'max' => 15],
            [['fat_part_no', 'parts_no'], 'unique', 'targetAttribute' => ['fat_part_no', 'parts_no']],
            [['fat_part_no'], 'exist', 'skipOnError' => true, 'targetClass' => Dqc84::className(), 'targetAttribute' => ['fat_part_no' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fat_part_no' => 'Fat Part No',
            'parts_no' => 'Parts No',
            'unt_usg' => 'Unt Usg',
            'description' => 'Description',
            'ref_designator' => 'Ref Designator',
            'update_dt' => 'Update Dt',
            'create_dt' => 'Create Dt',
        ];
    }

    /**
     * Gets query for [[FatPartNo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFatPartNo()
    {
        return $this->hasOne(Dqc84::className(), ['id' => 'fat_part_no']);
    }
}
