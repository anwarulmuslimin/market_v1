<?php
/* @var $this BarangDiskonController */
/* @var $model BarangDiskon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-diskon-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_barang_id'); ?>
		<?php echo $form->textField($model,'diskon_barang_id'); ?>
		<?php echo $form->error($model,'diskon_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_type'); ?>
		<?php echo $form->textField($model,'diskon_type',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'diskon_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_angka'); ?>
		<?php echo $form->textField($model,'diskon_angka'); ?>
		<?php echo $form->error($model,'diskon_angka'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_aktif'); ?>
		<?php echo $form->textField($model,'diskon_aktif',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'diskon_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_tgl_awal'); ?>
		<?php echo $form->textField($model,'diskon_tgl_awal'); ?>
		<?php echo $form->error($model,'diskon_tgl_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_tgl_akhir'); ?>
		<?php echo $form->textField($model,'diskon_tgl_akhir'); ?>
		<?php echo $form->error($model,'diskon_tgl_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_pelanggan_type'); ?>
		<?php echo $form->textField($model,'diskon_pelanggan_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'diskon_pelanggan_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_create'); ?>
		<?php echo $form->textField($model,'diskon_create'); ?>
		<?php echo $form->error($model,'diskon_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_update'); ?>
		<?php echo $form->textField($model,'diskon_update'); ?>
		<?php echo $form->error($model,'diskon_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diskon_user_input'); ?>
		<?php echo $form->textField($model,'diskon_user_input'); ?>
		<?php echo $form->error($model,'diskon_user_input'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->