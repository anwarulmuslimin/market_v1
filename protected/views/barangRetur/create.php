<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */

$this->breadcrumbs=array(
	'Barang Returs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BarangRetur', 'url'=>array('index')),
	array('label'=>'Manage BarangRetur', 'url'=>array('admin')),
);
?>

<h1>Create BarangRetur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>