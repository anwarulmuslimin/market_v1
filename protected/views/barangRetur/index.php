<?php
/* @var $this BarangReturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barang Returs',
);

$this->menu=array(
	array('label'=>'Create BarangRetur', 'url'=>array('create')),
	array('label'=>'Manage BarangRetur', 'url'=>array('admin')),
);
?>

<h1>Barang Returs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
