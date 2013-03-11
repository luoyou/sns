<?php
/* @var $this TalkListController */
/* @var $dataProvider CActiveDataProvider */
?>
<div id="other_info">
   	<div id="user_info">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" />
        <span>落忧</span>
        <p>这是人生的旅途，一场走向终点的喧嚣……</p>
    </div>
    <div id="user_prompt">
        <span>13年2月14日 周五</span>
        <span>天气晴转多云,-1到4度</span>
        <span>明日天气晴,-4到5度,大家记得加衣服</span>
    </div>
    <div id="user_operate">
        <a href="#" class="user_operate_type"><i class="message_type_article_icon"></i>写日志</a>
        <a href="#" class="user_operate_type"><i class="message_type_photo_icon"></i>传照片</a>
        <a href="#" class="user_operate_type"><i class="message_type_video_icon"></i>发视频</a>
    </div>
    <div id="user_trend">
        <a href="#" class="user_operate_type"><i class="message_friend_icon"></i>好友动态</a>
        <a href="#" class="user_operate_type"><i class="message_friend_special_icon"></i>特别关心</a>
        <a href="#" class="user_operate_type"><i class="message_me_icon"></i>我的消息</a>            
    </div>
    <div id="user_link" class="clearfix">
        <a href="#" class="function_link"><i class="article_icon"></i>日志</a>
        <a href="#" class="function_link"><i class="photo_icon"></i>相册</a>
        <a href="#" class="function_link"><i class="say_icon"></i>说说</a>
        <a href="#" class="function_link"><i class="leave_message_icon"></i>留言板</a>
        <a href="#" class="function_link"><i class="share_icon"></i>分享</a>
        <a href="#" class="function_link"><i class="user_info_icon"></i>个人信息</a>
    </div>
    <div id="visited_user">
        <span><strong>谁看过我</strong>  <a href="javascript:none;">我看过谁</a></span>
        <div id="visited_user_pic">
            <ul>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />断桥残雪</a>11:30</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic4.jpg" />佐仓杏子</a>10:14</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic1.jpg" />命中注定</a>昨天</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" />雨季</a>前天</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />枯泪</a>1月20日</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic4.jpg" />佐仓杏子</a>1月15日</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic1.jpg" />命中注定</a>1月5日</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" />雨季</a>12月30日</li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />枯泪</a>12月20日</li>
            </ul>
            <span>上一页1/2<a href="#">下一页</a></span>
        </div>
    </div>
</div>
<div id="main_info">
	<div id="message">
	    <div id="publish_message" class="edit_status" contenteditable="true">走过人生的路程, 我们一起留下的回忆……</div>
	    <div id="insert_content"></div>
	    <div id="syn_message"></div>
	    <div><a id="submit_message">发表</a></div>
	</div>
	<div id="view_message">
	    <div id="message_set"></div>
	    <div id="message_content">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
                    'ajaxUpdate'=>false,
                    'template'=>'<span>{summary}</span><ul id="message_list">{items}<ul><div>{pager}</div>',
                    'summaryText'=>'共{count}条，当前页显示第{start}-{end}条',
                    'pager'=>array(
                            'class'=>'CLinkPager',//定义要调用的分页器类，默认是CLinkPager，需要完全自定义，还可以重写一个，参考我的另一篇博文：http://blog.sina.com.cn/s/blog_71d4414d0100yu6k.html
                            'cssFile'=>false,//定义分页器的要调用的css文件，false为不调用，不调用则需要亲自己css文件里写这些样式
                            'header'=>'',      //定义的文字将显示在pager的最前面
                            //'footer'=>'hello',           //定义的文字将显示在pager的最后面
                            'firstPageLabel'=>'首页',     //定义首页按钮的显示文字
                            'lastPageLabel'=>'尾页',      //定义末页按钮的显示文字
                            'nextPageLabel'=>'下一页',     //定义下一页按钮的显示文字
                            'prevPageLabel'=>'前一页',     //定义上一页按钮的显示文字
                            //关于分页器这个array，具体还有很多属性，可参考CLinkPager的API
                        ),
				)); 
			?>
	    </div>
	</div>
</div>
