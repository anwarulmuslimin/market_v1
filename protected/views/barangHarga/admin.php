<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */

$this->breadcrumbs=array(
	'Barang Hargas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BarangHarga', 'url'=>array('index')),
	array('label'=>'Create BarangHarga', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#barang-harga-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Barang Hargas</h1>

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
	'id'=>'barang-harga-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'harga_id',
		'harga_barang_id',
		'harga_barang_stok',
		'harga_barang_jumlah',
		'harga_barang_total',
		'harga_barang_beli',
		/*
		'harga_barang_jual',
		'harga_barang_create',
		'harga_barang_update',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
