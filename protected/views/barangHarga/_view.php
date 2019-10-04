<?php
/* @var $this BarangHargaController */
/* @var $data BarangHarga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->harga_id), array('view', 'id'=>$data->harga_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_id')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_stok')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_total')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_beli')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_jual')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_jual); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_create')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_barang_update')); ?>:</b>
	<?php echo CHtml::encode($data->harga_barang_update); ?>
	<br />

	*/ ?>

</div>