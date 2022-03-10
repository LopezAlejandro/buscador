<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Carrera $model
*/

$this->title = Yii::t('models', 'Carrera');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Carreras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud carrera-create">

    <h1>
                <?= Html::encode($model->carrera_id) ?>
        <small>
            <?= Yii::t('models', 'Carrera') ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
