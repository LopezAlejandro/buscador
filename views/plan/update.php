<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Plan $model
*/

$this->title = Yii::t('models', 'Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Plan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->plan_id, 'url' => ['view', 'plan_id' => $model->plan_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud plan-update">

    <h1>
                <?= Html::encode($model->plan_id) ?>

        <small>
            <?= Yii::t('models', 'Plan') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'plan_id' => $model->plan_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
