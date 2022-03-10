<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Prg $model
*/

$this->title = Yii::t('models', 'Prg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Prgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud prg-create">

    <h1>
                <?= Html::encode($model->prg_id) ?>
        <small>
            <?= Yii::t('models', 'Prg') ?>
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
