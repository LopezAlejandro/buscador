<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Carrera $model
*/

$this->title = Yii::t('models', 'Carrera');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Carrera'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->carrera_id, 'url' => ['view', 'carrera_id' => $model->carrera_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud carrera-update">

    <h1>
                <?= Html::encode($model->carrera_id) ?>

        <small>
            <?= Yii::t('models', 'Carrera') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'carrera_id' => $model->carrera_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
