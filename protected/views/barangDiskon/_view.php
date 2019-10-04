<?php
/* @var $this BarangDiskonController */
/* @var $data BarangDiskon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->diskon_id), array('view', 'id'=>$data->diskon_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_barang_id')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_barang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_type')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_angka')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_angka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_tgl_awal')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_tgl_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_tgl_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_tgl_akhir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_pelanggan_type')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_pelanggan_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_create')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_update')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon_user_input')); ?>:</b>
	<?php echo CHtml::encode($data->diskon_user_input); ?>
	<br />

	*/ ?>

</div>