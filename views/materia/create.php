<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Materia $model
*/

$this->title = Yii::t('models', 'Materia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Materias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud materia-create">

    <h1>
                <?= Html::encode($model->materia_id) ?>
        <small>
            <?= Yii::t('models', 'Materia') ?>
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
