<section class="nav-page">
<?php
/* @var $this MarketController */
/* @var $model Market */

$this->breadcrumbs=array(
	'Markets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Market', 'url'=>array('index')),
	array('label'=>'Manage Market', 'url'=>array('admin')),
);
?>
</section>
<section class="page container">
<h1>Create Market</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>