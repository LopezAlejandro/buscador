<?php

namespace app\models;

use Yii;
use \app\models\base\Prg as BasePrg;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "prg".
 */
class Prg extends BasePrg
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
