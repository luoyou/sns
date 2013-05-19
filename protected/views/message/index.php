<?php $this->renderPartial('//layouts/other_info'); ?>
<div id="main_info">
	<div id="message">
	    <div id="publish_message" contenteditable="true"></div>
	    <div id="insert_content"></div>
	    <div id="syn_message"></div>
	    <div><a id="submit_message">发表</a></div>
	</div>
	<div id="view_message">
	    <div id="message_set">
	        <div id="message_type">
	            <a id="message_type_all" href="javascript:none;"><i class="message_type_all_icon"></i>全部</a>
	            <a id="message_type_photo" href="#"><i class="message_type_photo_icon"></i>相册</a>
	            <a id="message_type_article" href="#"><i class="message_type_article_icon"></i>日志</a>                
	        </div>
	        <div id="dispose_message">
	            <a id="refresh_message" href="javascript:none;"><i id="refresh_message_icon"></i></a>
	            <a id="view_set_message" href="javascript:none;"><i id="view_set_message_icon"></i></a>
	        </div>
	    </div>
	    <div id="message_content">
	        <div id="tip_box">
	            <a href="javascript:none;" class="refresh_add_message">半夏等人 有新的动态, 点击查看</a>
	        </div>
	        <ul id="message_list">
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">海角七号</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <p>我把对你的思念写在海角上,寄给那年七号的雨季</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">白狐</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <span class="user_operate_type">发表日志</span><a href="#" class="article_title">白狐</a>
	                        <p class="article_content">我爱你时就正一贫如洗寒窗苦读,离开你时你正金榜题名洞房花烛</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">南山忆</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <span class="user_operate_type">转载了日志</span><a href="#" class="article_title" >南山忆</a>
	                        <p class="article_content">独揽月下萤火,照亮一纸寂寞,追忆那些什么,你说的爱我;花开后花又落,轮回也没结果,苔上雪告诉我,你没归来过……</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">海角七号</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <p>我把对你的思念写在海角上,寄给那年七号的雨季</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">白狐</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <p>我爱你时就正一贫如洗寒窗苦读,离开你时你正金榜题名洞房花烛</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	            <li>
	                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" /></a>
	                <div class="message_frame bg2">
	                    <div class="message_user_name">
	                        <span><a href="#">南山忆</a></span>
	                    </div>
	                    <div class="message_user_content">
	                        <p>独揽月下萤火,照亮一纸寂寞,追忆那些什么,你说的爱我;花开后花又落,轮回也没结果,苔上雪告诉我,你没归来过……</p>
	                        <span>11:30 <a href="javascript:none;">赞</a><a href="javascript:none;">评论</a><a href="javascript:none;">转发</a></span>
	                    </div>
	                    <div class="message_comment" contenteditable="true"></div>
	                </div>
	            </li>
	        <ul>
	        <div id="more_message">
	            冷月,时光等更多好友的动态
	        </div>
	    </div>
	</div>
</div>

<?php
/*
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>