<?php
/* @var $this TransaksidetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Details',
);

$this->menu=array(
	array('label'=>'Create TransaksiDetail', 'url'=>array('create')),
	array('label'=>'Manage TransaksiDetail', 'url'=>array('admin')),
);
?>

<h1>Transaksi Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
