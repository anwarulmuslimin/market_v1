<section class="nav-page">
<?php
/* @var $this MarketController */
/* @var $model Market */

$this->breadcrumbs=array(
	'Markets'=>array('index'),
	$model->minimarket_id,
);

$this->menu=array(
	array('label'=>'List Market', 'url'=>array('index')),
	array('label'=>'Create Market', 'url'=>array('create')),
	array('label'=>'Update Market', 'url'=>array('update', 'id'=>$model->minimarket_id)),
	array('label'=>'Delete Market', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->minimarket_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Market', 'url'=>array('admin')),
);
?>
</section>
<section class="page container">
<h1>View Market #<?php echo $model->minimarket_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'minimarket_id',
		'minimarket_kode',
		'minimarket_nama',
		'minimarket_type',
	//	'minimarket_create',
	//	'minimarket_update',
	),
)); ?>
</section>
