<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-harga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_id'); ?>
		<?php echo $form->textField($model,'harga_barang_id'); ?>
		<?php echo $form->error($model,'harga_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_stok'); ?>
		<?php echo $form->textField($model,'harga_barang_stok',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'harga_barang_stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_jumlah'); ?>
		<?php echo $form->textField($model,'harga_barang_jumlah',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'harga_barang_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_total'); ?>
		<?php echo $form->textField($model,'harga_barang_total',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'harga_barang_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_beli'); ?>
		<?php echo $form->textField($model,'harga_barang_beli'); ?>
		<?php echo $form->error($model,'harga_barang_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_jual'); ?>
		<?php echo $form->textField($model,'harga_barang_jual'); ?>
		<?php echo $form->error($model,'harga_barang_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_create'); ?>
		<?php echo $form->textField($model,'harga_barang_create'); ?>
		<?php echo $form->error($model,'harga_barang_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_barang_update'); ?>
		<?php echo $form->textField($model,'harga_barang_update'); ?>
		<?php echo $form->error($model,'harga_barang_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->