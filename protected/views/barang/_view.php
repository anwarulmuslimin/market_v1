<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->barang_id), array('view', 'id'=>$data->barang_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_barcode')); ?>:</b>
	<?php echo CHtml::encode($data->barang_barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_nama')); ?>:</b>
	<?php echo CHtml::encode($data->barang_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_kategori_id')); ?>:</b>
	<?php echo CHtml::encode($data->barang_kategori_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->barang_aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_diskon')); ?>:</b>
	<?php echo CHtml::encode($data->barang_diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_create')); ?>:</b>
	<?php echo CHtml::encode($data->barang_create); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_update')); ?>:</b>
	<?php echo CHtml::encode($data->barang_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_type')); ?>:</b>
	<?php echo CHtml::encode($data->barang_type); ?>
	<br />

	*/ ?>

</div>