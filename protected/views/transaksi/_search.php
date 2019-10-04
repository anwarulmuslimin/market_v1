<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'transaksi_id'); ?>
		<?php echo $form->textField($model,'transaksi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_barcode'); ?>
		<?php echo $form->textField($model,'transaksi_barcode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_harga'); ?>
		<?php echo $form->textField($model,'transaksi_harga',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_diskon'); ?>
		<?php echo $form->textField($model,'transaksi_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_harga_diskon'); ?>
		<?php echo $form->textField($model,'transaksi_harga_diskon',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_pelanggan_id'); ?>
		<?php echo $form->textField($model,'transaksi_pelanggan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_user_id'); ?>
		<?php echo $form->textField($model,'transaksi_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_akun'); ?>
		<?php echo $form->textField($model,'transaksi_akun',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_creaate'); ?>
		<?php echo $form->textField($model,'transaksi_creaate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaksi_update'); ?>
		<?php echo $form->textField($model,'transaksi_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->