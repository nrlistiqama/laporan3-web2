<?php

namespace app\controllers;
use app\models\Kelas006;
use yii\data\ActiveDataProvider;

class Kelas006Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Kelas006::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
