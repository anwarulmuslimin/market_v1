<?php
/* @var $this BarangPembelianController */
/* @var $data BarangPembelian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pembelian_id), array('view', 'id'=>$data->pembelian_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_barang_barcode')); ?>:</b>
	<?php echo CHtml::encode($data->pembelian_barang_barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->pembelian_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_create')); ?>:</b>
	<?php echo CHtml::encode($data->pembelian_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_update')); ?>:</b>
	<?php echo CHtml::encode($data->pembelian_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembelian_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->pembelian_user_id); ?>
	<br />


</div>