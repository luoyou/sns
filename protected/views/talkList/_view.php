<?php
/* @var $this TalkListController */
/* @var $data TalkList */
?>
<li>
    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" /></a>
    <div class="message_frame bg2">
        <div class="message_user_name">
            <span><a href="#"><?php echo CHtml::encode($data->user->nickname); ?></a></span>
        </div>
        <div class="message_user_content">
            <p><?php echo CHtml::encode($data->content->content); ?></p>
            <span>
            	<?php echo CHtml::encode(returnTime($data->create_time)); ?>
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
                    <div class="comment_main">
                        <span class="comment_content">
                            <a href="">落忧</a>:这是人生的一段旅程
                        </span>
                        <span class="comment_info">
                            昨天 22:30<a class="reply">回复</a>
                        </span>
                        <ul class="reply_comment">
                            <li>
                                <a href="">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />
                                </a>
                                <div class="comment_main second_comment">
                                    <span class="comment_content">
                                        <a href="#">梦杰</a>回复<a href="">落忧</a>:这是人生的一段旅程
                                    </span>
                                    <span class="comment_info">
                                        昨天 22:30<a class="reply">回复</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic1.jpg" />
                    </a>
                    <div class="comment_main">
                        <span class="comment_content">
                            <a href="">落忧</a>:这是人生的一段旅程
                        </span>
                        <span class="comment_info">
                            昨天 22:30<a class="reply">回复</a>
                        </span>
                    </div>
                </li>

        	</ul>
        </div>
        <div class="message_comment" contenteditable="true"></div>
        <div class="comment_commit"><a>提交</a></div>
    </div> 
</li>