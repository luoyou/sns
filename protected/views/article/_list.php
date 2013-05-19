<li class="zy_bg1 bg_diary">
    <?php if($data->istop): ?><span class="zy_bg2">[顶]</span><?php endif; ?>
    <?php echo CHtml::link($data->title,array('Article/View','id'=>$data->id),array('class'=>'zy_bg3')); ?>
    <div class="right_operate">
        <span class="zy_time"><?php echo formatTime($data->create_time); ?></span>
        <a>编辑</a><a>删除</a>
    </div>
</li>

<!---->
<!--<li class="zy_bg4 bg_diary">-->
<!--    <span class="zy_bg2">[顶]</span>-->
<!--    <a class="zy_bg3">缅怀一直陪伴我的手机(悼念词)</a>-->
<!--    <div class="right_operate">-->
<!--        <span class="zy_time">2010-03-11</span>-->
<!--        <a>编辑</a><a>删除</a>-->
<!--    </div>-->
<!--</li>-->