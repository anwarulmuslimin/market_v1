<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kategori_id), array('view', 'id'=>$data->kategori_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_nama')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_market_id')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_market_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_create')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_update')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_update); ?>
	<br />


</div>