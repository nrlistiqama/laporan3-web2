<?php
    use yii\grid\GridView;
    use yii\grid\ActionColumn;
    use yii\grid\SerialColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-success'])
?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id006',
            'no_induk_mahasiswa006',
            'nama_mahasiswa006',
            'kelas006',
            'status006',
            ['class' => ActionColumn::className()],
        ],
    ]);
?>
