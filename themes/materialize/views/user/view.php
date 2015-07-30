<?php
/* @var $this KategoribarangController */
/* @var $model KategoriBarang */

$this->breadcrumbs = array(
	 'User' => array('index'),
	 $model->id,
);

$this->boxHeader['small'] = 'View';
$this->boxHeader['normal'] = 'User: '.$model->nama;
?>
<div class="row">
	<div class="col s12">
		<?php
		$this->widget('MDetailView', array(
			 'data' => $model,
			 'attributes' => array(
				  'nama',
				  'nama_lengkap'
			 ),
		));
		?>
	</div>
</div>
<?php
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
);

$this->menu = array(
	 array('label' => '<i class="large mdi-editor-mode-edit"></i>', 'url' => $this->createUrl('ubah', array('id' => $model->id)), 'linkOptions' => array(
				'class' => 'btn-floating orange',
				'accesskey' => 'i'
		  )),
	 array('label' => '<i class="large mdi-navigation-close"></i>', 'url' => $this->createUrl('hapus', array('id' => $model->id)), 'linkOptions' => array(
				'class' => 'btn-floating red',
				'accesskey' => 'i'
		  )),
	 array('label' => '<i class="large mdi-action-list"></i>', 'url' => $this->createUrl('index'), 'linkOptions' => array(
				'class' => 'btn-floating blue',
				'accesskey' => 'i'
		  ))
);