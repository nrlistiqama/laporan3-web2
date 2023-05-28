<?php

namespace app\controllers;
use app\models\Profil006;
use yii\data\ActiveDataProvider;

class Profil006Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil006::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
