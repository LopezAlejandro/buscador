<?php

namespace app\models;

use Yii;
use \app\models\base\Carrera as BaseCarrera;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "carrera".
 */
class Carrera extends BaseCarrera
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
