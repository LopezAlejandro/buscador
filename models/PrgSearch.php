<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prg;

/**
* PrgSearch represents the model behind the search form about `app\models\Prg`.
*/
class PrgSearch extends Prg
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['prg_id'], 'integer'],
[['carrera','materia','catedra','plan'],'string'],
            
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Prg::find()->joinWith('carrera0')
					     ->joinWith('materia0')
					     ->joinWith('catedra0')
					     ->joinWith('plan0');

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'prg_id' => $this->prg_id,
  //          'carrera' => $this->carrera,
  //          'materia' => $this->materia,
  //          'catedra' => $this->catedra,
 //           'plan' => $this->plan,
 //           'vale_desde' => $this->vale_desde,
 //           'vale_hasta' => $this->vale_hasta,
 //           'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'archivo', $this->archivo])
       		  ->andFilterWhere(['like', 'carrera.nombre', $this->carrera])
       		  ->andFilterWhere(['like', 'materia.nombre', $this->materia])
       		  ->andFilterWhere(['like', 'catedra.nombre', $this->catedra])
       		  ->andFilterWhere(['like', 'plan.nombre', $this->plan]);

return $dataProvider;
}
}