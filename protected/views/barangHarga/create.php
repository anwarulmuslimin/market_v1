<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */

$this->breadcrumbs=array(
	'Barang Hargas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BarangHarga', 'url'=>array('index')),
	array('label'=>'Manage BarangHarga', 'url'=>array('admin')),
);
?>

<h1>Create BarangHarga</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>