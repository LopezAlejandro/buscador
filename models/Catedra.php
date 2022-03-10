<?php

namespace app\models;

use Yii;
use \app\models\base\Catedra as BaseCatedra;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "catedra".
 */
class Catedra extends BaseCatedra
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
