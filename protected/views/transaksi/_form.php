<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_barcode'); ?>
		<?php echo $form->textField($model,'transaksi_barcode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'transaksi_barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_harga'); ?>
		<?php echo $form->textField($model,'transaksi_harga',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transaksi_harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_diskon'); ?>
		<?php echo $form->textField($model,'transaksi_diskon'); ?>
		<?php echo $form->error($model,'transaksi_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_harga_diskon'); ?>
		<?php echo $form->textField($model,'transaksi_harga_diskon',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transaksi_harga_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_pelanggan_id'); ?>
		<?php echo $form->textField($model,'transaksi_pelanggan_id'); ?>
		<?php echo $form->error($model,'transaksi_pelanggan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_user_id'); ?>
		<?php echo $form->textField($model,'transaksi_user_id'); ?>
		<?php echo $form->error($model,'transaksi_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_akun'); ?>
		<?php echo $form->textField($model,'transaksi_akun',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'transaksi_akun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_creaate'); ?>
		<?php echo $form->textField($model,'transaksi_creaate'); ?>
		<?php echo $form->error($model,'transaksi_creaate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_update'); ?>
		<?php echo $form->textField($model,'transaksi_update'); ?>
		<?php echo $form->error($model,'transaksi_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->