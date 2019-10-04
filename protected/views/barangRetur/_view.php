<?php
/* @var $this BarangReturController */
/* @var $data BarangRetur */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->retur_id), array('view', 'id'=>$data->retur_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_barang_id')); ?>:</b>
	<?php echo CHtml::encode($data->retur_barang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->retur_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_type')); ?>:</b>
	<?php echo CHtml::encode($data->retur_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_alasan')); ?>:</b>
	<?php echo CHtml::encode($data->retur_alasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_create')); ?>:</b>
	<?php echo CHtml::encode($data->retur_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_update')); ?>:</b>
	<?php echo CHtml::encode($data->retur_update); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('retur_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->retur_user_id); ?>
	<br />

	*/ ?>

</div>