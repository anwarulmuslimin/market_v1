<?php
/* @var $this BarangPembelianController */
/* @var $model BarangPembelian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pembelian_id'); ?>
		<?php echo $form->textField($model,'pembelian_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembelian_barang_barcode'); ?>
		<?php echo $form->textField($model,'pembelian_barang_barcode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembelian_jumlah'); ?>
		<?php echo $form->textField($model,'pembelian_jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembelian_create'); ?>
		<?php echo $form->textField($model,'pembelian_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembelian_update'); ?>
		<?php echo $form->textField($model,'pembelian_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembelian_user_id'); ?>
		<?php echo $form->textField($model,'pembelian_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->