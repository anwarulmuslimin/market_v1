<?php
/* @var $this BarangDiskonController */
/* @var $model BarangDiskon */

$this->breadcrumbs=array(
	'Barang Diskons'=>array('index'),
	$model->diskon_id=>array('view','id'=>$model->diskon_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangDiskon', 'url'=>array('index')),
	array('label'=>'Create BarangDiskon', 'url'=>array('create')),
	array('label'=>'View BarangDiskon', 'url'=>array('view', 'id'=>$model->diskon_id)),
	array('label'=>'Manage BarangDiskon', 'url'=>array('admin')),
);
?>

<h1>Update BarangDiskon <?php echo $model->diskon_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>