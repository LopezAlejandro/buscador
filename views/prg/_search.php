<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\PrgSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="prg-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'prg_id') ?>

		<?= $form->field($model, 'carrera') ?>

		<?= $form->field($model, 'materia') ?>

		<?= $form->field($model, 'catedra') ?>

		<?= $form->field($model, 'plan') ?>

		<?php // echo $form->field($model, 'vale_desde') ?>

		<?php // echo $form->field($model, 'vale_hasta') ?>

		<?php // echo $form->field($model, 'archivo') ?>

		<?php // echo $form->field($model, 'activo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
