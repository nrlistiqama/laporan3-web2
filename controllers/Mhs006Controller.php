<?php

namespace app\controllers;
use app\models\Mhs006;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs006Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs006::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs= new Mhs006;
        $mhs->no_induk_mahasiswa006 = '60200121006-'.rand(100,999);
        $mhs->nama_mahasiswa006 = 'Nurul Istiqama';
        $mhs->kelas006 = 'D';
        $mhs->status006 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs006::findOne($id);
        if ($mhs !== null) {
            $mhs->kelas006 = 'A';
            $mhs->status006 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs006::findOne($id);
        if ($mhs->delete()) {
            return $this->redirect(['index']);
        }        
    }

    public function actionView($id)
    {
        $mhs= Mhs006::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}
