<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->transaksi_id), array('view', 'id'=>$data->transaksi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_barcode')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_harga')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_diskon')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_harga_diskon')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_harga_diskon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_pelanggan_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_pelanggan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_user_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_akun')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_akun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_creaate')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_creaate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_update')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_update); ?>
	<br />

	*/ ?>

</div>