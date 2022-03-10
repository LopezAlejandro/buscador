<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Catedra $model
*/

$this->title = Yii::t('models', 'Catedra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Catedra'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->catedra_id, 'url' => ['view', 'catedra_id' => $model->catedra_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud catedra-update">

    <h1>
                <?= Html::encode($model->catedra_id) ?>

        <small>
            <?= Yii::t('models', 'Catedra') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'catedra_id' => $model->catedra_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
