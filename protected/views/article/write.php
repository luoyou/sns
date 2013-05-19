<div id="write_header">
    <h3>写日志</h3>
    <?php echo CHtml::link('返回日志列表',array('Article/Index')); ?>
</div>
<div id="write_content" class="bg3">
    <form action="" method="post">
        <input name="Article[title]" type="text" placeholder="请输入标题" class="write_title" />
        <span class="editor">
            <textarea name="Article[content]" class="xheditor {skin:'nostyle'}" style="width: 800px;height: 300px;"></textarea>
        </span>
        <div id="article_type">
            <select name="Article[column_id]">
                <option value="0">请选择分类</option>
                <?php foreach($column as $value): ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->column_name; ?></option>
                <?php endforeach; ?>
                <option>添加分类</option>
            </select>
            私密:<input name="Article[private]" value="1" type="radio" />
            置顶:<input name="Article[istop]" value="1" type="radio" />
        </div>
        <div class="article_button">
            <input type="submit" value="确定" class="submit_button" />
            <input type="button" value="取消" class="cancel_button" />
        </div>
    </form>
</div>
<div id="add_column"><input type="text" /></div>