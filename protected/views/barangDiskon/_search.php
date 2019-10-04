<?php
/* @var $this BarangDiskonController */
/* @var $model BarangDiskon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'diskon_id'); ?>
		<?php echo $form->textField($model,'diskon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_barang_id'); ?>
		<?php echo $form->textField($model,'diskon_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_type'); ?>
		<?php echo $form->textField($model,'diskon_type',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_angka'); ?>
		<?php echo $form->textField($model,'diskon_angka'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_aktif'); ?>
		<?php echo $form->textField($model,'diskon_aktif',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_tgl_awal'); ?>
		<?php echo $form->textField($model,'diskon_tgl_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_tgl_akhir'); ?>
		<?php echo $form->textField($model,'diskon_tgl_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_pelanggan_type'); ?>
		<?php echo $form->textField($model,'diskon_pelanggan_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_create'); ?>
		<?php echo $form->textField($model,'diskon_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_update'); ?>
		<?php echo $form->textField($model,'diskon_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon_user_input'); ?>
		<?php echo $form->textField($model,'diskon_user_input'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->