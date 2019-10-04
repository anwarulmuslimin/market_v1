<?php
/* @var $this BarangPembelianController */
/* @var $model BarangPembelian */

$this->breadcrumbs=array(
	'Barang Pembelians'=>array('index'),
	$model->pembelian_id=>array('view','id'=>$model->pembelian_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangPembelian', 'url'=>array('index')),
	array('label'=>'Create BarangPembelian', 'url'=>array('create')),
	array('label'=>'View BarangPembelian', 'url'=>array('view', 'id'=>$model->pembelian_id)),
	array('label'=>'Manage BarangPembelian', 'url'=>array('admin')),
);
?>

<h1>Update BarangPembelian <?php echo $model->pembelian_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>