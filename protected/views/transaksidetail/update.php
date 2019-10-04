<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */

$this->breadcrumbs=array(
	'Transaksi Details'=>array('index'),
	$model->detail_transaksi_id=>array('view','id'=>$model->detail_transaksi_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiDetail', 'url'=>array('index')),
	array('label'=>'Create TransaksiDetail', 'url'=>array('create')),
	array('label'=>'View TransaksiDetail', 'url'=>array('view', 'id'=>$model->detail_transaksi_id)),
	array('label'=>'Manage TransaksiDetail', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiDetail <?php echo $model->detail_transaksi_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>