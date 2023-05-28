<?php
    use app\models\Kelas006;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

    $this->title = 'Data Kelas';
    $this->params['breadcrumbs'][] = $this->title;

    /** @var yii\web\View $this */
    /** @var yii\data\ActiveDataProvider $dataprovider */
?>

<div class="kelas-006-index">

    <h1><?=Html::encode($this->title) ?></h1>

    <p>
        <?=Html::button('Peserta Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'semester',
            'nama_kelas',
            'peserta',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kelas006 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>
</div>