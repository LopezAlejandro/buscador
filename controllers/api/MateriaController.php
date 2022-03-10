<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "MateriaController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class MateriaController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Materia';
}
