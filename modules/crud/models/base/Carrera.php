<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\modules\crud\models\base;

use Yii;

/**
 * This is the base-model class for table "carrera".
 *
 * @property integer $carrera_id
 * @property string $nombre
 *
 * @property \app\modules\crud\models\Catedra[] $catedras
 * @property \app\modules\crud\models\Materium[] $materia
 * @property \app\modules\crud\models\Prg[] $prgs
 * @property string $aliasModel
 */
abstract class Carrera extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'carrera_id' => Yii::t('models', 'Carrera ID'),
            'nombre' => Yii::t('models', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatedras()
    {
        return $this->hasMany(\app\modules\crud\models\Catedra::className(), ['carrera' => 'carrera_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasMany(\app\modules\crud\models\Materium::className(), ['carrera' => 'carrera_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrgs()
    {
        return $this->hasMany(\app\modules\crud\models\Prg::className(), ['carrera' => 'carrera_id']);
    }


    
    /**
     * @inheritdoc
     * @return \app\models\query\CarreraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CarreraQuery(get_called_class());
    }


}
