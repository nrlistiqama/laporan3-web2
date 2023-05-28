<?php

namespace app\controllers;
use app\models\Mahasiswa006;
use yii\data\ActiveDataProvider;

class Mahasiswa006Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa006::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
