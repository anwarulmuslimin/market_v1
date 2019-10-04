<?php
/* @var $this BarangDiskonController */
/* @var $model BarangDiskon */

$this->breadcrumbs=array(
	'Barang Diskons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BarangDiskon', 'url'=>array('index')),
	array('label'=>'Manage BarangDiskon', 'url'=>array('admin')),
);
?>

<h1>Create BarangDiskon</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>