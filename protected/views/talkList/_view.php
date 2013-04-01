<?php
/* @var $this TalkListController */
/* @var $data TalkList */
?>
<!--
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
-->

<li>
    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" /></a>
    <div class="message_frame bg2">
        <div class="message_user_name">
            <span><a href="#"><?php echo CHtml::encode($data->user->nickname); ?></a></span>
        </div>
        <div class="message_user_content">
            <p><?php echo CHtml::encode($data->content->content); ?></p>
            <span>
            	<?php echo CHtml::encode(Common::returnTime($data->create_time)); ?>
				<a >赞</a>
				<a comment="<?php echo CHtml::encode($data->id); ?>" class="comment" >
					评论(<?php echo CHtml::encode($data->talk_comment_count); ?>)
				</a>
				<a trans="<?php echo CHtml::encode($data->content->id); ?>" class="transmit">转发</a>
			</span>
        </div>
        <div class="comment_view">
        	<ul>
        		<li>
        			<a href="">
        				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic1.jpg" />
        			</a>
        			<span>这是人生的一段旅程</span>
        		</li>
        		<li>
        			<a href="">
        				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />
        			</a>
        			<span>这是人生的一段旅程</span>
        		</li>
        		<li>
        			<a href="">
        				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" />
        			</a>
        			<span>这是人生的一段旅程</span>
        		</li>
        		<li>
        			<a href="">
        				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic4.jpg" />
        			</a>
        			<span>这是人生的一段旅程</span>
        		</li>
        		<li>
        			<a href="">
        				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" />
        			</a>
        			<span>这是人生的一段旅程</span>
        		</li>
        	</ul>
        </div>
        <div class="message_comment" contenteditable="true"></div>
        <div class="comment_commit"><a>提交</a></div>
    </div>
</li>