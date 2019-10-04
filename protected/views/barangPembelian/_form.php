<?php
/* @var $this BarangPembelianController */
/* @var $model BarangPembelian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-pembelian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pembelian_barang_barcode'); ?>
		<?php echo $form->textField($model,'pembelian_barang_barcode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pembelian_barang_barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembelian_jumlah'); ?>
		<?php echo $form->textField($model,'pembelian_jumlah'); ?>
		<?php echo $form->error($model,'pembelian_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembelian_create'); ?>
		<?php echo $form->textField($model,'pembelian_create'); ?>
		<?php echo $form->error($model,'pembelian_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembelian_update'); ?>
		<?php echo $form->textField($model,'pembelian_update'); ?>
		<?php echo $form->error($model,'pembelian_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembelian_user_id'); ?>
		<?php echo $form->textField($model,'pembelian_user_id'); ?>
		<?php echo $form->error($model,'pembelian_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->