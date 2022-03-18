<?php

/*use yii\helpers\Html;*/
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

use yii\helpers\Url;
use yii\grid\GridView;


/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
    * @var app\models\PrgSearch $searchModel
*/

$this->title = Yii::t('models', 'Prg');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud prg-index">

    <?php
//             echo $this->render('_search', ['model' =>$searchModel]);
        ?>

    
    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('models.plural', 'Programas') ?>
        <small>
            <?= Yii::t('cruds', 'Lista') ?>
        </small>
    </h1>
    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'Nuevo', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">

                                                                                                                                        
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
            [
            'id' => 'giiant-relations',
            'encodeLabel' => false,
            'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relaciones',
            'dropdown' => [
            'options' => [
            'class' => 'dropdown-menu-right'
            ],
            'encodeLabels' => false,
            'items' => [
            [
                'url' => ['carrera/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Carrera'),
            ],
                                [
                'url' => ['catedra/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Catedra'),
            ],
                                [
                'url' => ['materia/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Materia'),
            ],
                                [
                'url' => ['plan/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Plan'),
            ],
                    
]
            ],
            'options' => [
            'class' => 'btn-default'
            ]
            ]
            );
            ?>
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
        	'class' => yii\widgets\LinkPager::className(),
	        'firstPageLabel' => 'First',
	        'lastPageLabel' => 'Last',
        ],
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'headerRowOptions' => ['class'=>'x'],
        'columns' => [
        	        [
        		    'class' => 'yii\grid\ActionColumn',
        		    'template' => $actionColumnTemplateString,
        		    'buttons' => [
        				        'view' => function ($url, $model, $key) {
        									            $options = [
        										            'title' => Yii::t('cruds', 'View'),
										                    'aria-label' => Yii::t('cruds', 'View'),
										                    'data-pjax' => '0',
                    									    ];
                    									    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
                									}
            				],
            		   'urlCreator' => function($action, $model, $key, $index) {
									                // using the column name as key, not mapping to 'id' like the standard generator
									                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
									                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
									                return Url::toRoute($params);
            									   },
		          'contentOptions' => ['nowrap'=>'nowrap']
        		],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'carrera',
			    'value' => function ($model) {
			 				        if ($rel = $model->carrera0) {
			 								           return Html::a($rel->nombre, ['carrera/view', 'carrera_id' => $rel->carrera_id,], ['data-pjax' => 0]);
			 							             } else {
											            return '';
			        									}
			    								     },
			    'format' => 'raw',
	//		    'filterType' => GridView::FILTER_SELECT2,
//                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Carrera::find()->asArray()->all(), 'carrera_id', 'nombre'),
 //               'filter' => Html::activeDropDownList($searchModel, 'carrera', \yii\helpers\ArrayHelper::map(\app\models\Carrera::find()->asArray()->all(), 'carrera_id', 'nombre'),['class'=>'form-control','prompt' => 'Select Category']),   
   //             'filterWidgetOptions' => [
   //                 'pluginOptions' => ['allowClear' => true],
   //             ],
   //             'filterInputOptions' => ['placeholder' => 'Carrera', 'id' => 'grid-prg-search-carrera']
            

			],
			
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'materia',
			    'value' => function ($model) {
			        if ($rel = $model->materia0) {
			            return Html::a($rel->nombre, ['materia/view', 'materia_id' => $rel->materia_id,], ['data-pjax' => 0]);
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
			        if ($rel = $model->catedra0) {
			            return Html::a($rel->nombre, ['catedra/view', 'catedra_id' => $rel->catedra_id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat

			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'plan',
			    'value' => function ($model) {
			        if ($rel = $model->plan0) {
			            return Html::a($rel->nombre, ['plan/view', 'plan_id' => $rel->plan_id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],

			'vale_desde',
			'vale_hasta',

			[
				'attribute' => 'archivo',
				'format' =>'raw',
				'value' => function ($model) {
					return Html::a('Descargar',['prg/download','prg_id' => $model->prg_id,],['data-pjax' => 0]);
					}
			],
			/*'activo',*/
		]
                
        ]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>


