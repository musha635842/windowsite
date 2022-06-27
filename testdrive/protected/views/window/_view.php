<?php
/* @var $this WindowController */
/* @var $data Window */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gauge')); ?>:</b>
	<?php echo CHtml::encode($data->gauge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request')); ?>:</b>
	<?php echo CHtml::encode($data->request); ?>
	<br />


</div>