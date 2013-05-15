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
