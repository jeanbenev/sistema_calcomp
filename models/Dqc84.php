<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dqc84".
 *
 * @property int $id
 * @property int $model
 * @property string $fat_part_no
 * @property int $total_location
 * @property string $update_dt
 * @property string $create_dt
 *
 * @property Dqcmodel $model0
 * @property Dqc841[] $dqc841s
 */
class Dqc84 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dqc84';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'fat_part_no', 'total_location'], 'required'],
            [['model', 'total_location'], 'integer'],
            [['update_dt', 'create_dt'], 'safe'],
            [['fat_part_no'], 'string', 'max' => 15],
            [['fat_part_no'], 'unique'],
            [['model'], 'exist', 'skipOnError' => true, 'targetClass' => Dqcmodel::className(), 'targetAttribute' => ['model' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'fat_part_no' => 'Fat Part No',
            'total_location' => 'Total Location',
            'update_dt' => 'Update Dt',
            'create_dt' => 'Create Dt',
        ];
    }

    /**
     * Gets query for [[Model0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModel0()
    {
        return $this->hasOne(Dqcmodel::className(), ['id' => 'model']);
    }

    /**
     * Gets query for [[Dqc841s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDqc841s()
    {
        return $this->hasMany(Dqc841::className(), ['fat_part_no' => 'id']);
    }
}
