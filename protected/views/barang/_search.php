<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'barang_id'); ?>
		<?php echo $form->textField($model,'barang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_barcode'); ?>
		<?php echo $form->textField($model,'barang_barcode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_nama'); ?>
		<?php echo $form->textField($model,'barang_nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_kategori_id'); ?>
		<?php echo $form->textField($model,'barang_kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_aktif'); ?>
		<?php echo $form->textField($model,'barang_aktif',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_diskon'); ?>
		<?php echo $form->textField($model,'barang_diskon',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_create'); ?>
		<?php echo $form->textField($model,'barang_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_update'); ?>
		<?php echo $form->textField($model,'barang_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_type'); ?>
		<?php echo $form->textField($model,'barang_type',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->