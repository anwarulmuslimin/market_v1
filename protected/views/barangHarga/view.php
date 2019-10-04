<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */

$this->breadcrumbs=array(
	'Barang Hargas'=>array('index'),
	$model->harga_id,
);

$this->menu=array(
	array('label'=>'List BarangHarga', 'url'=>array('index')),
	array('label'=>'Create BarangHarga', 'url'=>array('create')),
	array('label'=>'Update BarangHarga', 'url'=>array('update', 'id'=>$model->harga_id)),
	array('label'=>'Delete BarangHarga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->harga_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangHarga', 'url'=>array('admin')),
);
?>

<h1>View BarangHarga #<?php echo $model->harga_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'harga_id',
		'harga_barang_id',
		'harga_barang_stok',
		'harga_barang_jumlah',
		'harga_barang_total',
		'harga_barang_beli',
		'harga_barang_jual',
		'harga_barang_create',
		'harga_barang_update',
	),
)); ?>
