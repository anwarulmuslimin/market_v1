<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_id'); ?>
		<?php echo $form->textField($model,'pelanggan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_nama'); ?>
		<?php echo $form->textField($model,'pelanggan_nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_kartu_id'); ?>
		<?php echo $form->textField($model,'pelanggan_kartu_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_kategori'); ?>
		<?php echo $form->textField($model,'pelanggan_kategori',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_create'); ?>
		<?php echo $form->textField($model,'pelanggan_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_update'); ?>
		<?php echo $form->textField($model,'pelanggan_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelanggan_user_id'); ?>
		<?php echo $form->textField($model,'pelanggan_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->