<?php
/* @var $this MarketController */
/* @var $data Market */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->minimarket_id), array('view', 'id'=>$data->minimarket_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_kode')); ?>:</b>
	<?php echo CHtml::encode($data->minimarket_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_nama')); ?>:</b>
	<?php echo CHtml::encode($data->minimarket_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_type')); ?>:</b>
	<?php echo CHtml::encode($data->minimarket_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_create')); ?>:</b>
	<?php echo CHtml::encode($data->minimarket_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimarket_update')); ?>:</b>
	<?php echo CHtml::encode($data->minimarket_update); ?>
	<br />


</div>