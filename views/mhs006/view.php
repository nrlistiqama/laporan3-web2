<?php
    use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id006',
            'no_induk_mahasiswa006',
            'nama_mahasiswa006',
            'kelas006',
            'status006',
        ],
    ]);
?>
