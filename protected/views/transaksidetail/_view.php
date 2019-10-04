<?php
/* @var $this TransaksidetailController */
/* @var $data TransaksiDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detail_transaksi_id), array('view', 'id'=>$data->detail_transaksi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_transaksi_id')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_transaksi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_harga_satuan')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_harga_satuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_harga_diskon')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_harga_diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_diskon')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_create')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_create); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_transaksi_update')); ?>:</b>
	<?php echo CHtml::encode($data->detail_transaksi_update); ?>
	<br />

	*/ ?>

</div>