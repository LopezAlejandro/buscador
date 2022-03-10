<?php

namespace app\models;

use Yii;
use \app\models\base\Materia as BaseMateria;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "materia".
 */
class Materia extends BaseMateria
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
