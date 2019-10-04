<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */

$this->breadcrumbs=array(
	'Barang Returs'=>array('index'),
	$model->retur_id,
);

$this->menu=array(
	array('label'=>'List BarangRetur', 'url'=>array('index')),
	array('label'=>'Create BarangRetur', 'url'=>array('create')),
	array('label'=>'Update BarangRetur', 'url'=>array('update', 'id'=>$model->retur_id)),
	array('label'=>'Delete BarangRetur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->retur_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangRetur', 'url'=>array('admin')),
);
?>

<h1>View BarangRetur #<?php echo $model->retur_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'retur_id',
		'retur_barang_id',
		'retur_jumlah',
		'retur_type',
		'retur_alasan',
		'retur_create',
		'retur_update',
		'retur_user_id',
	),
)); ?>
