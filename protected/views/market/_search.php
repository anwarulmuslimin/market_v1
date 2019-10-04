<?php
/* @var $this MarketController */
/* @var $model Market */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'minimarket_id'); ?>
		<?php echo $form->textField($model,'minimarket_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimarket_kode'); ?>
		<?php echo $form->textField($model,'minimarket_kode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimarket_nama'); ?>
		<?php echo $form->textField($model,'minimarket_nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimarket_type'); ?>
		<?php echo $form->textField($model,'minimarket_type',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimarket_create'); ?>
		<?php echo $form->textField($model,'minimarket_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimarket_update'); ?>
		<?php echo $form->textField($model,'minimarket_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->