<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "CatedraController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CatedraController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Catedra';
}
