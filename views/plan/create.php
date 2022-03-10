<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Plan $model
*/

$this->title = Yii::t('models', 'Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud plan-create">

    <h1>
                <?= Html::encode($model->plan_id) ?>
        <small>
            <?= Yii::t('models', 'Plan') ?>
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
