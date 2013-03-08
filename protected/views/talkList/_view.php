<?php
/* @var $this TalkListController */
/* @var $data TalkList */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talk_id')); ?>:</b>
	<?php echo CHtml::encode($data->content->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_id')); ?>:</b>
	<?php echo CHtml::encode($data->comment_id); ?>
	<br />
==========================================<br/>
    <b><?php echo CHtml::encode($data->getAttributeLabel('comment_id')); ?>:</b>
    <?php foreach($data->talk_comment as $value) echo $value->content; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('comment_count')); ?>:</b>
    <?php echo CHtml::encode($data->talk_comment_count); ?>
    <br />
=========================================<br/>
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_count')); ?>:</b>
	<?php echo CHtml::encode($data->comment_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />


</div>