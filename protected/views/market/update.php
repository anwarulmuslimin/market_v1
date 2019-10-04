<?php
/* @var $this MarketController */
/* @var $model Market */

$this->breadcrumbs=array(
	'Markets'=>array('index'),
	$model->minimarket_id=>array('view','id'=>$model->minimarket_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Market', 'url'=>array('index')),
	array('label'=>'Create Market', 'url'=>array('create')),
	array('label'=>'View Market', 'url'=>array('view', 'id'=>$model->minimarket_id)),
	array('label'=>'Manage Market', 'url'=>array('admin')),
);
?>

<h1>Update Market <?php echo $model->minimarket_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>