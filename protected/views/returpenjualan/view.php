<?php
/* @var $this ReturpenjualanController */
/* @var $model ReturPenjualan */

$this->breadcrumbs = array(
    'Retur Penjualan' => array('index'),
    $model->id,
);

$this->boxHeader['small'] = 'View';
$this->boxHeader['normal'] = 'Retur Penjualan: '.$model->nomor;
?>
<div class="row">
   <div class="small-12 columns header">
      <span class="secondary label">Customer</span><span class="label"><?php echo $model->profil->nama; ?></span>
      <span class="secondary label">Tanggal</span><span class="label"><?php echo $model->tanggal; ?></span>
      <span class="secondary label">Total</span><span class="alert label"><?php echo $model->total; ?></span>
      <span class="secondary label">Status</span><span class="warning label"><?php echo $model->getNamaStatus(); ?></span>
   </div>
</div>
<?php
 $this->widget('BGridView', array(
       'id' => 'retur-penjualan-detail-grid',
       'dataProvider' => $returPenjualanDetail->search(),
       //'filter' => $returPenjualanDetail,
       'enableSorting' => false,
       'columns' => array(
           array(
               'name' => 'barcode',
               'value' => '$data->penjualanDetail->barang->barcode',
           ),
           array(
               'name' => 'namaBarang',
               'value' => '$data->penjualanDetail->barang->nama',
           ),
           array(
               'header' => 'Penjualan',
               'value' => '$data->penjualanDetail->penjualan->nomor',
           ),
           array(
               'header' => 'Tanggal Penjualan',
               'value' => '$data->penjualanDetail->penjualan->tanggal',
           ),
           array(
               'header' => 'Harga Jual',
               'value' => 'number_format($data->penjualanDetail->harga_jual,0,",",".")',
               'headerHtmlOptions' => array('class' => 'rata-kanan'),
               'htmlOptions' => array('class' => 'rata-kanan')
           ),
           array(
               'name' => 'qty',
               'headerHtmlOptions' => array('style' => 'width:75px;', 'class' => 'rata-kanan'),
               'htmlOptions' => array('class' => 'rata-kanan'),
           ),
			  array(
					'name' => 'subTotal',
					'value' => 'number_format($data->total,0,",",".")',
					'headerHtmlOptions' => array('class' => 'rata-kanan'),
					'htmlOptions' => array('class' => 'rata-kanan'),
					'filter' => false
			  ),
       ),
   ));                    
                        
$this->menu = array(
    array('itemOptions' => array('class' => 'divider'), 'label' => false),
    array('itemOptions' => array('class' => 'has-form hide-for-small-only'), 'label' => false,
        'items' => array(
            array('label' => '<i class="fa fa-pencil"></i> <span class="ak">U</span>bah', 'url' => $this->createUrl('ubah', array('id' => $model->id)), 'linkOptions' => array(
                    'class' => 'button',
                    'accesskey' => 'u'
                )),
            array('label' => '<i class="fa fa-times"></i> <span class="ak">H</span>apus', 'url' => $this->createUrl('hapus', array('id' => $model->id)), 'linkOptions' => array(
                    'class' => 'alert button',
                    'accesskey' => 'h',
                    'submit' => array('hapus', 'id' => $model->id),
                    'confirm' => 'Anda yakin?'
                )),
            array('label' => '<i class="fa fa-asterisk"></i> <span class="ak">I</span>ndex', 'url' => $this->createUrl('index'), 'linkOptions' => array(
                    'class' => 'success button',
                    'accesskey' => 'i'
                ))
        ),
        'submenuOptions' => array('class' => 'button-group')
    ),
    array('itemOptions' => array('class' => 'has-form show-for-small-only'), 'label' => false,
        'items' => array(
            array('label' => '<i class="fa fa-pencil"></i>', 'url' => $this->createUrl('ubah', array('id' => $model->id)), 'linkOptions' => array(
                    'class' => 'button',
                )),
            array('label' => '<i class="fa fa-times"></i>', 'url' => $this->createUrl('hapus', array('id' => $model->id)), 'linkOptions' => array(
                    'class' => 'alert button',
                    'submit' => array('hapus', 'id' => $model->id),
                    'confirm' => 'Anda yakin?'
                )),
            array('label' => '<i class="fa fa-asterisk"></i>', 'url' => $this->createUrl('index'), 'linkOptions' => array(
                    'class' => 'success button',
                ))
        ),
        'submenuOptions' => array('class' => 'button-group')
    )
);