<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelanggan-form',
	'action' => Yii::app()->createUrl('pelanggan/store'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


<legend>Tambah Pelanggan</legend><br>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pelanggan_nama'); ?>
		<?php echo $form->textField($model,'pelanggan_nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pelanggan_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelanggan_kartu_id'); ?>
		<?php echo $form->textField($model,'pelanggan_kartu_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pelanggan_kartu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelanggan_kategori'); ?>
		<?php echo $form->dropDownList($model,'pelanggan_kategori',array('PLATINUM' => 'PLATINUM', 'GOLD' => 'GOLD'), 
        [
            'class' => 'my-drop-down',
            'options' => [
                '2' => [ 'selected' => true ]
            ]
        ]); ?>
		<?php echo $form->error($model,'pelanggan_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'pelanggan_create',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'pelanggan_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'pelanggan_update',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'pelanggan_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'pelanggan_user_id',['value'=>'1']); ?>
		<?php echo $form->error($model,'pelanggan_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->