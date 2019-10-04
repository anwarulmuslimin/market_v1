<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	$model->pelanggan_id,
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'Update Pelanggan', 'url'=>array('update', 'id'=>$model->pelanggan_id)),
	array('label'=>'Delete Pelanggan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pelanggan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>View Pelanggan #<?php echo $model->pelanggan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pelanggan_id',
		'pelanggan_nama',
		'pelanggan_kartu_id',
		'pelanggan_kategori',
		'pelanggan_create',
		'pelanggan_update',
		'pelanggan_user_id',
	),
)); ?>
