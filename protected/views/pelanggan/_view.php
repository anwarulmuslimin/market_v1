<?php
/* @var $this PelangganController */
/* @var $data Pelanggan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pelanggan_id), array('view', 'id'=>$data->pelanggan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_nama')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_kartu_id')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_kartu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_create')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_update')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelanggan_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->pelanggan_user_id); ?>
	<br />


</div>