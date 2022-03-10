<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "PlanController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PlanController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Plan';
}
