<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */

$this->breadcrumbs=array(
	'Transaksi Details'=>array('index'),
	$model->detail_transaksi_id,
);

$this->menu=array(
	array('label'=>'List TransaksiDetail', 'url'=>array('index')),
	array('label'=>'Create TransaksiDetail', 'url'=>array('create')),
	array('label'=>'Update TransaksiDetail', 'url'=>array('update', 'id'=>$model->detail_transaksi_id)),
	array('label'=>'Delete TransaksiDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->detail_transaksi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiDetail', 'url'=>array('admin')),
);
?>

<h1>View TransaksiDetail #<?php echo $model->detail_transaksi_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'detail_transaksi_id',
		'detail_transaksi_transaksi_id',
		'detail_transaksi_harga_satuan',
		'detail_transaksi_harga_diskon',
		'detail_transaksi_diskon',
		'detail_transaksi_jumlah',
		'detail_transaksi_create',
		'detail_transaksi_update',
	),
)); ?>
