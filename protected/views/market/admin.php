<section class="nav-page">
<div class="container">
                <div class="row">
                    <div class="span7">
                        <header class="page-header">
                            <h3>Manage Markets</h3>
                        </header>
                    </div>
                    <div class="span9">
					<?php
/* @var $this MarketController */
/* @var $model Market */

$this->breadcrumbs=array(
	'Markets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Market', 'url'=>array('index')),
	array('label'=>'Create Market', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#market-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
                    </div>
                </div>
            </div>
</section>
<section class="page container">
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->
<!-- 
< ?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> -->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'market-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
	//	'minimarket_id',
		'minimarket_kode',
		'minimarket_nama',
		'minimarket_type',
	//	'minimarket_create',
	//	'minimarket_update',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</section>