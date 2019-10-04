<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'retur_id'); ?>
		<?php echo $form->textField($model,'retur_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_barang_id'); ?>
		<?php echo $form->textField($model,'retur_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_jumlah'); ?>
		<?php echo $form->textField($model,'retur_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_type'); ?>
		<?php echo $form->textField($model,'retur_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_alasan'); ?>
		<?php echo $form->textArea($model,'retur_alasan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_create'); ?>
		<?php echo $form->textField($model,'retur_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_update'); ?>
		<?php echo $form->textField($model,'retur_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retur_user_id'); ?>
		<?php echo $form->textField($model,'retur_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->