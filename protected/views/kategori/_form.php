<?php
/* @var $this KategoriController */
/* @var $model Kategori */
/* @var $form CActiveForm */
?>

<legend>Tambah Kategori</legend><br>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategori-form',
	'action' => Yii::app()->createUrl('kategori/store'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_nama'); ?>
		<?php echo $form->textField($model,'kategori_nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kategori_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_market_id'); ?>
		<?php echo $form->textField($model,'kategori_market_id'); ?>
		<?php echo $form->error($model,'kategori_market_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'kategori_create',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'kategori_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'kategori_update',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'kategori_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>
