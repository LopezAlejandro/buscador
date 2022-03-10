<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catedra;

/**
* CatedraSearch represents the model behind the search form about `app\models\Catedra`.
*/
class CatedraSearch extends Catedra
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['catedra_id', 'carrera', 'materia'], 'integer'],
            [['nombre'], 'safe'],
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
$query = Catedra::find();

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
            'catedra_id' => $this->catedra_id,
            'carrera' => $this->carrera,
            'materia' => $this->materia,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

return $dataProvider;
}
}