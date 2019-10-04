<?php
/* @var $this BarangHargaController */
/* @var $model BarangHarga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'harga_id'); ?>
		<?php echo $form->textField($model,'harga_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_id'); ?>
		<?php echo $form->textField($model,'harga_barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_stok'); ?>
		<?php echo $form->textField($model,'harga_barang_stok',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_jumlah'); ?>
		<?php echo $form->textField($model,'harga_barang_jumlah',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_total'); ?>
		<?php echo $form->textField($model,'harga_barang_total',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_beli'); ?>
		<?php echo $form->textField($model,'harga_barang_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_jual'); ?>
		<?php echo $form->textField($model,'harga_barang_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_create'); ?>
		<?php echo $form->textField($model,'harga_barang_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_barang_update'); ?>
		<?php echo $form->textField($model,'harga_barang_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->