<?php

$this->widget('BGridView', array(
    'id' => 'hutang-piutang-grid',
    'dataProvider' => $hutangPiutang->search(),
    'filter' => $hutangPiutang,
    'columns' => array(
        array(
            'name' => 'tipe',
            'value' => '$data->namaTipe',
            'filter' => $listNamaTipe
        ),
        array(
            'name' => 'asal',
            'value' => '$data->namaAsal',
            'filter' => $listNamaAsalHutangPiutang
        ),
        array(
            'class' => 'BDataColumn',
            'name' => 'namaProfil',
            'header' => 'Pro<span class="ak">f</span>il',
            'value' => '$data->profil->nama',
            'accesskey' => 'f',
            'type' => 'raw',
        ),
        'nomor_dokumen_asal',
        //'nomor',
        array(
            'class' => 'BDataColumn',
            'name' => 'nomor',
            'header' => 'Nomo<span class="ak">r</span>',
            'accesskey' => 'r',
            'type' => 'raw',
            'value' => function($data) {
                return '<a href="' . Yii::app()->controller->createUrl('pilihdokumen', array('id' => $data->id)) . '" class="pilih dokumen">' . $data->nomor . '</a>';
            },
        ),
		  array(
				'name'=>'sisa',
				'header' => 'Unpaid',
				'value' => 'number_format($data->sisa, 0, ",",".")',
            'htmlOptions' => array('class' => 'rata-kanan'),
            'headerHtmlOptions' => array('class' => 'rata-kanan'),
				'filter' => false,
		  ),
        array(
            'name' => 'jumlah',
				'value' => 'number_format($data->jumlah, 0, ",",".")',
            'htmlOptions' => array('class' => 'rata-kanan'),
            'headerHtmlOptions' => array('class' => 'rata-kanan')
        ),
        'created_at',
    ),
));
