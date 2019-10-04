<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */

$this->breadcrumbs=array(
	'Transaksi Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TransaksiDetail', 'url'=>array('index')),
	array('label'=>'Create TransaksiDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Transaksi Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaksi-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'detail_transaksi_id',
		'detail_transaksi_transaksi_id',
		'detail_transaksi_harga_satuan',
		'detail_transaksi_harga_diskon',
		'detail_transaksi_diskon',
		'detail_transaksi_jumlah',
		/*
		'detail_transaksi_create',
		'detail_transaksi_update',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
