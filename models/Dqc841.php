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
            'update_dt' => 'Data de Alteração',
            'create_dt' => 'Data de Criação',
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

    /**
     * @uses Usado para criar uma lista array com os dados da tabela relacionada
     */
    public function getModelOptions()
	{
        $model = new DqcModel();
        $opt = Array();
        foreach($model->find()->all() as $dqcmodel){
            $opt[$dqcmodel->id] = $dqcmodel->model;
        }
		return $opt;
	}

    /**
     * @uses Usado para criar uma lista array com os dados da tabela relacionada
     */
    public function getFatPartNoOptions()
	{
        $model = new Dqc84();
        $opt = Array();
        foreach($model->find()->all() as $dqc84){
            $opt[$dqc84->id] = $dqc84->fat_part_no;
        }
		return $opt;
	}

    /**
     * @uses Usada para buscar uma lista de array de dados e substituir pelo atributo especifico da instancia
     */
	public function getFatPartNoText(){
		$options = $this->getFatPartNoOptions();
		return $options[$this->fat_part_no];
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
