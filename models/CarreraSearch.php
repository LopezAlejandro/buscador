<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carrera;

/**
* CarreraSearch represents the model behind the search form about `app\models\Carrera`.
*/
class CarreraSearch extends Carrera
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['carrera_id'], 'integer'],
            [['nombre'], 'safe'],
            [['sigla'], 'safe'],
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
$query = Carrera::find();

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
            'carrera_id' => $this->carrera_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

return $dataProvider;
}
}