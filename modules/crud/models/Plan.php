<?php

namespace app\modules\crud\models;

use Yii;
use \app\modules\crud\models\base\Plan as BasePlan;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "plan".
 */
class Plan extends BasePlan
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
