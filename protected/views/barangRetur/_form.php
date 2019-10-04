<?php
/* @var $this BarangReturController */
/* @var $model BarangRetur */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-retur-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_barang_id'); ?>
		<?php echo $form->textField($model,'retur_barang_id'); ?>
		<?php echo $form->error($model,'retur_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_jumlah'); ?>
		<?php echo $form->textField($model,'retur_jumlah'); ?>
		<?php echo $form->error($model,'retur_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_type'); ?>
		<?php echo $form->textField($model,'retur_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'retur_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_alasan'); ?>
		<?php echo $form->textArea($model,'retur_alasan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'retur_alasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_create'); ?>
		<?php echo $form->textField($model,'retur_create'); ?>
		<?php echo $form->error($model,'retur_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_update'); ?>
		<?php echo $form->textField($model,'retur_update'); ?>
		<?php echo $form->error($model,'retur_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retur_user_id'); ?>
		<?php echo $form->textField($model,'retur_user_id'); ?>
		<?php echo $form->error($model,'retur_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->