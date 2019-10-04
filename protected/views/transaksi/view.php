<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->transaksi_id,
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'Create Transaksi', 'url'=>array('create')),
	array('label'=>'Update Transaksi', 'url'=>array('update', 'id'=>$model->transaksi_id)),
	array('label'=>'Delete Transaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->transaksi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksi', 'url'=>array('admin')),
);
?>

<h1>View Transaksi #<?php echo $model->transaksi_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'transaksi_id',
		'transaksi_barcode',
		'transaksi_harga',
		'transaksi_diskon',
		'transaksi_harga_diskon',
		'transaksi_pelanggan_id',
		'transaksi_user_id',
		'transaksi_akun',
		'transaksi_creaate',
		'transaksi_update',
	),
)); ?>
