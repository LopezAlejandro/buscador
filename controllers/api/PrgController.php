<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "PrgController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PrgController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Prg';
}
