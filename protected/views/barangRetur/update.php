<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */

$this->breadcrumbs=array(
	'Barang Returs'=>array('index'),
	$model->retur_id=>array('view','id'=>$model->retur_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangRetur', 'url'=>array('index')),
	array('label'=>'Create BarangRetur', 'url'=>array('create')),
	array('label'=>'View BarangRetur', 'url'=>array('view', 'id'=>$model->retur_id)),
	array('label'=>'Manage BarangRetur', 'url'=>array('admin')),
);
?>

<h1>Update BarangRetur <?php echo $model->retur_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>