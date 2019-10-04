<?php
/* @var $this BarangDiskonController */
/* @var $model BarangDiskon */

$this->breadcrumbs=array(
	'Barang Diskons'=>array('index'),
	$model->diskon_id,
);

$this->menu=array(
	array('label'=>'List BarangDiskon', 'url'=>array('index')),
	array('label'=>'Create BarangDiskon', 'url'=>array('create')),
	array('label'=>'Update BarangDiskon', 'url'=>array('update', 'id'=>$model->diskon_id)),
	array('label'=>'Delete BarangDiskon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->diskon_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangDiskon', 'url'=>array('admin')),
);
?>

<h1>View BarangDiskon #<?php echo $model->diskon_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'diskon_id',
		'diskon_barang_id',
		'diskon_type',
		'diskon_angka',
		'diskon_aktif',
		'diskon_tgl_awal',
		'diskon_tgl_akhir',
		'diskon_pelanggan_type',
		'diskon_create',
		'diskon_update',
		'diskon_user_input',
	),
)); ?>
