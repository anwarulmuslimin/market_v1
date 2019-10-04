<?php
/* @var $this BarangPembelianController */
/* @var $model BarangPembelian */

$this->breadcrumbs=array(
	'Barang Pembelians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BarangPembelian', 'url'=>array('index')),
	array('label'=>'Manage BarangPembelian', 'url'=>array('admin')),
);
?>

<h1>Create BarangPembelian</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>