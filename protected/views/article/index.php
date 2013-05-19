<div id="zy_content_header">
    <a>我的日志</a>
</div>
<div id="zy_content_main">
    <div class="zy_content_title">
        <span class="T"><p>T</p></span>
        <span class="write_diary">
            <?php echo CHtml::link('写日志',array('Article/Write')) ?>
        </span>
    </div>
    <div class="zy_content_front_line"></div>
    <ul>
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$list,
            'itemView'=>'_list',
            'ajaxUpdate'=>false,
            'template'=>"<span>{summary}</span><ul id='message_list'>{items}<ul><div>{pager}</div>",
            'summaryText'=>'共{count}条，当前页显示第{start}-{end}条',
            'summaryCssClass'=>'article_summary',
            'pager'=>array(
                'class'=>'CLinkPager',//定义要调用的分页器类，默认是CLinkPager，需要完全自定义，还可以重写一个，参考我的另一篇博文：http://blog.sina.com.cn/s/blog_71d4414d0100yu6k.html
                'cssFile'=>false,//定义分页器的要调用的css文件，false为不调用，不调用则需要亲自己css文件里写这些样式
                'header'=>'<br />',      //定义的文字将显示在pager的最前面
                //'footer'=>'hello',           //定义的文字将显示在pager的最后面
                'firstPageLabel'=>'首页',     //定义首页按钮的显示文字
                'lastPageLabel'=>'尾页',      //定义末页按钮的显示文字
                'nextPageLabel'=>'下一页',     //定义下一页按钮的显示文字
                'prevPageLabel'=>'前一页',     //定义上一页按钮的显示文字
                //关于分页器这个array，具体还有很多属性，可参考CLinkPager的API
            ),
        ));
        ?>
    </ul>
    <div class="zy_content_behind_line"></div>

<!--    <div class="zy_number">-->
<!--        <span class="zy_number_front"><p>上一页&nbsp;&nbsp;&nbsp;1</p></span>-->
<!--                <span class="zy_number_behind">-->
<!--                    <a href="#">2</a>-->
<!--                    <a href="#">3</a>-->
<!--                    <a href="#">4</a>-->
<!--                    <a href="#">5</a>-->
<!--                    <a href="#">6</a>-->
<!--                    <a href="#">...</a>-->
<!--                    <a href="#">60</a>-->
<!--                    <a href="#">下一页</a>-->
<!--                </span>-->
<!--                <span>-->
<!--                    转到<input type="text" class="zy_textinput" value="1">页-->
<!--                </span>-->
<!--        <button class="zy_bt_text2" input="button">确定</button>-->
<!--    </div>-->
    <div id="zy_content_main_right">
        <div class="zy_right_front_line"></div>
        <ul>
            <li class="zy_diary_managment">
                <span class="zy_man_bg1">日志分类</span>
                <a>管理</a>
            </li>
            <li class="zy_man_one">
                <span class="zy_man_bg1">
                    <?php echo CHtml::link('全部日志',array('Article/Index')); ?>
                </span>
                <span class="zy_man_bg2">(<?php echo $sum; ?>)</span>
            </li>
            <?php foreach($column as $key=>$value): ?>

            <li class="zy_man_one">
                <span class="zy_man_bg1">
                    <?php echo CHtml::link($value->column_name,array('Article/Index','column_id'=>$value->id)); ?>
                </span>
                <span class="zy_man_bg2">
                    (<?php echo $value->sum_article;?>)
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="zy_right_behind_line"></div>
    </div>

</div>