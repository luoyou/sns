<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
	<?php echo CHtml::encode($data->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sign')); ?>:</b>
	<?php echo CHtml::encode($data->user_sign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('english_name')); ?>:</b>
	<?php echo CHtml::encode($data->english_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horoscope')); ?>:</b>
	<?php echo CHtml::encode($data->horoscope); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_type')); ?>:</b>
	<?php echo CHtml::encode($data->blood_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_live_id')); ?>:</b>
	<?php echo CHtml::encode($data->current_live_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hometown_id')); ?>:</b>
	<?php echo CHtml::encode($data->hometown_id); ?>
	<br />

	*/ ?>

</div>