<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\Plan $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models.plural', 'Plan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->plan_id, 'url' => ['view', 'plan_id' => $model->plan_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud plan-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Html::encode($model->plan_id) ?>
        <small>
            <?= Yii::t('models', 'Plan') ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
            [ 'update', 'plan_id' => $model->plan_id],
            ['class' => 'btn btn-info'])
          ?>

            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
            ['create', 'plan_id' => $model->plan_id, 'Plan'=>$copyParams],
            ['class' => 'btn btn-success'])
          ?>

            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New',
            ['create'],
            ['class' => 'btn btn-success'])
          ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr/>

    <?php $this->beginBlock('app\models\Plan'); ?>

    
    <?php 
 echo DetailView::widget([
    'model' => $model,
    'attributes' => [
            'carrera',
        'nombre',
    ],
    ]);
  ?>

    
    <hr/>

    <?php 
 echo Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'plan_id' => $model->plan_id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]);
  ?>
    <?php $this->endBlock(); ?>


    
<?php $this->beginBlock('Prgs'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php
        echo Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Prgs',
            ['prg/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Prgs',
             ['prg/create', 'Prg' => ['plan' => $model->plan_id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Prgs', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Prgs ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
    'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => $model->getPrgs(),
        'pagination' => [
            'pageSize' => 20,
            'pageParam'=>'page-prgs',
        ]
    ]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [
 [
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {update}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function ($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'prg' . '/' . $action;
        $params['Prg'] = ['plan' => $model->primaryKey()[0]];
        return $params;
    },
    'buttons'    => [
        
    ],
    'controller' => 'prg'
],
        'prg_id',
// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'carrera',
    'value' => function ($model) {
        if ($rel = $model->carrera0) {
            return Html::a($rel->carrera_id, ['carrera/view', 'carrera_id' => $rel->carrera_id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'materia',
    'value' => function ($model) {
        if ($rel = $model->materia) {
            return Html::a($rel->materia_id, ['materia/view', 'materia_id' => $rel->materia_id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'catedra',
    'value' => function ($model) {
        if ($rel = $model->catedra) {
            return Html::a($rel->catedra_id, ['catedra/view', 'catedra_id' => $rel->catedra_id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
        'vale_desde',
        'vale_hasta',
        'archivo',
        'activo',
]
])
 . '</div>' 
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


    <?php 
        echo Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [
 [
    'label'   => '<b class=""># '.Html::encode($model->plan_id).'</b>',
    'content' => $this->blocks['app\models\Plan'],
    'active'  => true,
],
[
    'content' => $this->blocks['Prgs'],
    'label'   => '<small>Prgs <span class="badge badge-default">'. $model->getPrgs()->count() . '</span></small>',
    'active'  => false,
],
 ]
                 ]
    );
    ?>
</div>
