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
            'update_dt' => 'Data de Alteração',
            'create_dt' => 'Data de Criação',
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

    /**
     * @uses Usado para criar uma lista array com os dados da tabela relacionada DqcModel
     */
    public function getModelOptions()
	{
        $model = new Dqcmodel();
        $opt = Array();
        foreach($model->find()->all() as $dqcmodel){
            $opt[$dqcmodel->id] = $dqcmodel->model;
        }
		return $opt;
	}

    /**
     * @uses Usada para buscar uma lista de array de dados e substituir pelo atributo especifico da instancia
     */
	public function getModelText(){
		$options = $this->getModelOptions();
		return $options[$this->model];
	}

    /**
     * @uses Usado para fazer tratamentos antes do salvamento dos dados
     */
    public function beforeSave($insert){
        //Se for scenario de insert
        if($insert){
            //Tratamento do campo data para o formato aceito pelo MySQL
            $this->create_dt            = date("Y-m-d H:i:s");
            $this->update_dt            = date("Y-m-d H:i:s");
        }
        //Se for scenario de update
        else{
            $this->create_dt            = substr($this->create_dt, 6, 4).'-'.substr($this->create_dt, 3, 2).'-'.substr($this->create_dt, 0, 2).' '.substr($this->create_dt, 11, 8);
            $this->update_dt            = date("Y-m-d H:i:s");
        }
        return parent::beforeSave($insert);
    }

    public function afterFind(){
        //Tratamento dos campos data do MySQL para o formato legível do usuário
        $this->create_dt            = substr($this->create_dt, 8, 2).'/'.substr($this->create_dt, 5, 2).'/'.substr($this->create_dt, 0, 4).' '.substr($this->create_dt, 11, 8);
        $this->update_dt            = substr($this->update_dt, 8, 2).'/'.substr($this->update_dt, 5, 2).'/'.substr($this->update_dt, 0, 4).' '.substr($this->update_dt, 11, 8);
        return parent::afterFind();
    }
}
