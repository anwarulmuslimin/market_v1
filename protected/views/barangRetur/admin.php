<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */

$this->breadcrumbs=array(
	'Barang Returs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BarangRetur', 'url'=>array('index')),
	array('label'=>'Create BarangRetur', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#barang-retur-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Barang Returs</h1>

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
	'id'=>'barang-retur-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'retur_id',
		'retur_barang_id',
		'retur_jumlah',
		'retur_type',
		'retur_alasan',
		'retur_create',
		/*
		'retur_update',
		'retur_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
