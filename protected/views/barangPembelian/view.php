<?php
/* @var $this BarangPembelianController */
/* @var $model BarangPembelian */

$this->breadcrumbs=array(
	'Barang Pembelians'=>array('index'),
	$model->pembelian_id,
);

$this->menu=array(
	array('label'=>'List BarangPembelian', 'url'=>array('index')),
	array('label'=>'Create BarangPembelian', 'url'=>array('create')),
	array('label'=>'Update BarangPembelian', 'url'=>array('update', 'id'=>$model->pembelian_id)),
	array('label'=>'Delete BarangPembelian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pembelian_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangPembelian', 'url'=>array('admin')),
);
?>

<h1>View BarangPembelian #<?php echo $model->pembelian_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pembelian_id',
		'pembelian_barang_barcode',
		'pembelian_jumlah',
		'pembelian_create',
		'pembelian_update',
		'pembelian_user_id',
	),
)); ?>
