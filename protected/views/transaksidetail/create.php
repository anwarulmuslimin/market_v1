<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */

$this->breadcrumbs=array(
	'Transaksi Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiDetail', 'url'=>array('index')),
	array('label'=>'Manage TransaksiDetail', 'url'=>array('admin')),
);
?>

<h1>Create TransaksiDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>