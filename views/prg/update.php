<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Prg $model
*/

$this->title = Yii::t('models', 'Prg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Prg'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->prg_id, 'url' => ['view', 'prg_id' => $model->prg_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud prg-update">

    <h1>
                <?= Html::encode($model->prg_id) ?>

        <small>
            <?= Yii::t('models', 'Prg') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'prg_id' => $model->prg_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
