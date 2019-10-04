<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	'action' => Yii::app()->createUrl('barang/store'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


<legend>Tambah Barang</legend><br>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'barang_kategori_id'); ?>
		<?php echo $form->dropDownList($model,'barang_kategori_id',CHtml::listData( Kategori::model()->findAll(),'kategori_id','kategori_nama' ), 
        [
            'class' => 'my-drop-down',
            'options' => [
                '2' => [ 'selected' => true ]
            ]
        ]); ?>
		<?php echo $form->error($model,'barang_kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barang_barcode'); ?>
		<?php echo $form->textField($model,'barang_barcode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'barang_barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barang_nama'); ?>
		<?php echo $form->textField($model,'barang_nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'barang_nama'); ?>
	</div>

	<div class="row">
		<label>Harga Satuan Beli *</label>
		<div class="form-control">
			<input type="text" value="" name="harga_beli" id="harga_beli">
		</div>
	</div>

	<div class="row">
		<label>Harga Satuan Jual *</label>
		<div class="form-control">
			<input type="text" value="" name="harga_jual" id="harga_jual">
		</div>
	</div>

	<div class="row">
		<label>Jumlah Barang *</label>
		<div class="form-control">
			<input type="text" value="" name="jumlah_barang" id="jumlah_barang">
		</div>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'barang_aktif',array('size'=>1,'maxlength'=>1,'value'=>'Y')); ?>
		<?php echo $form->error($model,'barang_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'barang_diskon',array('size'=>1,'maxlength'=>1,'value'=>'N')); ?>
		<?php echo $form->error($model,'barang_diskon'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'barang_create',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'barang_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'barang_update',['value'=>date('Y-m-d H:i:s')]); ?>
		<?php echo $form->error($model,'barang_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'barang_type',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'barang_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array('class'=>'btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->