<?php
/* @var $this TransaksidetailController */
/* @var $model TransaksiDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_id'); ?>
		<?php echo $form->textField($model,'detail_transaksi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_transaksi_id'); ?>
		<?php echo $form->textField($model,'detail_transaksi_transaksi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_harga_satuan'); ?>
		<?php echo $form->textField($model,'detail_transaksi_harga_satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_harga_diskon'); ?>
		<?php echo $form->textField($model,'detail_transaksi_harga_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_diskon'); ?>
		<?php echo $form->textField($model,'detail_transaksi_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_jumlah'); ?>
		<?php echo $form->textField($model,'detail_transaksi_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_create'); ?>
		<?php echo $form->textField($model,'detail_transaksi_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_transaksi_update'); ?>
		<?php echo $form->textField($model,'detail_transaksi_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->