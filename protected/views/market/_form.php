<?php
/* @var $this MarketController */
/* @var $model Market */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'market-form',
	'action'=> Yii::app()->createUrl('market/store'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<legend>Tambah Toko</legend><br>
<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'minimarket_kode'); ?>
		<?php echo $form->textField($model,'minimarket_kode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'minimarket_kode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimarket_nama'); ?>
		<?php echo $form->textField($model,'minimarket_nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'minimarket_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimarket_type'); ?>
		<?php echo $form->textField($model,'minimarket_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'minimarket_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'minimarket_create',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'minimarket_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'minimarket_update',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'minimarket_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->