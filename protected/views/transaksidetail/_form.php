<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_transaksi_id'); ?>
		<?php echo $form->textField($model,'detail_transaksi_transaksi_id'); ?>
		<?php echo $form->error($model,'detail_transaksi_transaksi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_harga_satuan'); ?>
		<?php echo $form->textField($model,'detail_transaksi_harga_satuan'); ?>
		<?php echo $form->error($model,'detail_transaksi_harga_satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_harga_diskon'); ?>
		<?php echo $form->textField($model,'detail_transaksi_harga_diskon'); ?>
		<?php echo $form->error($model,'detail_transaksi_harga_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_diskon'); ?>
		<?php echo $form->textField($model,'detail_transaksi_diskon'); ?>
		<?php echo $form->error($model,'detail_transaksi_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_jumlah'); ?>
		<?php echo $form->textField($model,'detail_transaksi_jumlah'); ?>
		<?php echo $form->error($model,'detail_transaksi_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_create'); ?>
		<?php echo $form->textField($model,'detail_transaksi_create'); ?>
		<?php echo $form->error($model,'detail_transaksi_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_transaksi_update'); ?>
		<?php echo $form->textField($model,'detail_transaksi_update'); ?>
		<?php echo $form->error($model,'detail_transaksi_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->