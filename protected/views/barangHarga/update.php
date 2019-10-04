<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */

$this->breadcrumbs=array(
	'Barang Hargas'=>array('index'),
	$model->harga_id=>array('view','id'=>$model->harga_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangHarga', 'url'=>array('index')),
	array('label'=>'Create BarangHarga', 'url'=>array('create')),
	array('label'=>'View BarangHarga', 'url'=>array('view', 'id'=>$model->harga_id)),
	array('label'=>'Manage BarangHarga', 'url'=>array('admin')),
);
?>

<h1>Update BarangHarga <?php echo $model->harga_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>