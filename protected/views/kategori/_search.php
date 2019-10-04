<?php
/* @var $this KategoriController */
/* @var $model Kategori */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kategori_id'); ?>
		<?php echo $form->textField($model,'kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_nama'); ?>
		<?php echo $form->textField($model,'kategori_nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_market_id'); ?>
		<?php echo $form->textField($model,'kategori_market_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_create'); ?>
		<?php echo $form->textField($model,'kategori_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_update'); ?>
		<?php echo $form->textField($model,'kategori_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->