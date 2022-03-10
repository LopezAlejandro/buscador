<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Prg $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="prg-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Prg',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute carrera -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'carrera')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Carrera::find()->all(), 'carrera_id', 'carrera_id'),
    [
        'prompt' => 'Select',
        'disabled' => (isset($relAttributes) && isset($relAttributes['carrera'])),
    ]
); ?>

<!-- attribute materia -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'materia')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Materia::find()->all(), 'materia_id', 'materia_id'),
    [
        'prompt' => 'Select',
        'disabled' => (isset($relAttributes) && isset($relAttributes['materia'])),
    ]
); ?>

<!-- attribute catedra -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'catedra')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Catedra::find()->all(), 'catedra_id', 'catedra_id'),
    [
        'prompt' => 'Select',
        'disabled' => (isset($relAttributes) && isset($relAttributes['catedra'])),
    ]
); ?>

<!-- attribute plan -->
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'plan')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Plan::find()->all(), 'plan_id', 'plan_id'),
    [
        'prompt' => 'Select',
        'disabled' => (isset($relAttributes) && isset($relAttributes['plan'])),
    ]
); ?>

<!-- attribute vale_desde -->
			<?= $form->field($model, 'vale_desde')->textInput() ?>

<!-- attribute archivo -->
			<?= $form->field($model, 'archivo')->textInput(['maxlength' => true]) ?>

<!-- attribute vale_hasta -->
			<?= $form->field($model, 'vale_hasta')->textInput() ?>

<!-- attribute activo -->
			<?= $form->field($model, 'activo')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Prg'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

