<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Catedra $model
*/

$this->title = Yii::t('models', 'Catedra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Catedras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud catedra-create">

    <h1>
                <?= Html::encode($model->catedra_id) ?>
        <small>
            <?= Yii::t('models', 'Catedra') ?>
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
