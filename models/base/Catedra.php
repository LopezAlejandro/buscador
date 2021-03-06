<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "catedra".
 *
 * @property integer $catedra_id
 * @property integer $carrera
 * @property integer $materia
 * @property string $nombre
 *
 * @property \app\models\Carrera $carrera0
 * @property \app\models\Materia $materia0
 * @property \app\models\Prg[] $prgs
 * @property string $aliasModel
 */
abstract class Catedra extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catedra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carrera', 'materia', 'nombre'], 'required'],
            [['carrera', 'materia'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['carrera'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Carrera::className(), 'targetAttribute' => ['carrera' => 'carrera_id']],
            [['materia'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Materia::className(), 'targetAttribute' => ['materia' => 'materia_id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catedra_id' => 'Catedra ID',
            'carrera' => 'Carrera',
            'materia' => 'Materia',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrera0()
    {
        return $this->hasOne(\app\models\Carrera::className(), ['carrera_id' => 'carrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateria0()
    {
        return $this->hasOne(\app\models\Materia::className(), ['materia_id' => 'materia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrgs()
    {
        return $this->hasMany(\app\models\Prg::className(), ['catedra' => 'catedra_id']);
    }




}
