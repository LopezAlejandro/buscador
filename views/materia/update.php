<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Materia $model
*/

$this->title = Yii::t('models', 'Materia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Materia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->materia_id, 'url' => ['view', 'materia_id' => $model->materia_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud materia-update">

    <h1>
                <?= Html::encode($model->materia_id) ?>

        <small>
            <?= Yii::t('models', 'Materia') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'materia_id' => $model->materia_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
