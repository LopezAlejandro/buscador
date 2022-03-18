<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materia;

/**
* MateriaSearch represents the model behind the search form about `app\models\Materia`.
*/
class MateriaSearch extends Materia
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['materia_id'], 'integer'],
[['carrera'],'string'],
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
$query = Materia::find()->joinWith('carrera0');

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
            'materia_id' => $this->materia_id,
  //          'carrera' => $this->carrera,
        ]);

        $query->andFilterWhere(['like', 'carrera.nombre', $this->carrera]);

return $dataProvider;
}
}