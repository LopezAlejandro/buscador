<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "CarreraController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CarreraController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Carrera';
}
