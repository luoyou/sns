<div id="personal_title">个人资料</div>
<div id="personal_left_content" class="right_border bg3">
	<div id="personal_simple_info" class="bottom_border">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic4.jpg" />
		<a href="#">修改头像</a>
		<div id="personal_published_info">
			<span class="personal_published_every_info right_border"><a href="#">150</a>日志</span>
			<span class="personal_published_every_info right_border"><a href="#">150</a>照片</span>
			<span class="personal_published_every_info"><a href="#">150</a>说说</span>
		</div>
	</div>
</div>
<div id="personal_main_content" class="bg4">
	<div id="person_photo">
		<span id="person_name">落忧</span>
		<div>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic4.jpg" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic1.jpg" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic.jpg" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic3.jpg" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic2.jpg" />
		</div>
	</div>
	<div id="info_menu">
		<span class="bg2 border">详细信息</span>
		<span class="border un_bottom_border">个人资料</span>
	</div>
    <div id="personal_info">
        <ul>
            <li>
                <label><?php echo $model->getAttributeLabel('nickname'); ?>:</label>
                <span><?php echo $model->nickname; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('name'); ?>:</label>
                <span><?php echo $model->name; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('english_name'); ?>:</label>
                <span><?php echo $model->english_name; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('gender'); ?>:</label>
                <span><?php echo $model->sex[$model->gender]; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('horoscope'); ?>:</label>
                <span><?php echo $model->constellation[$model->horoscope]; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('blood_type'); ?>:</label>
                <span><?php echo $model->blood[$model->blood_type]; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('user_sign'); ?>:</label>
                <span><?php echo $model->user_sign; ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('current_live_id'); ?>:</label>
                <span><?php echo Area::model()->get_area($model->current_live_id); ?></span>
            </li>
            <li>
                <label><?php echo $model->getAttributeLabel('hometown_id'); ?>:</label>
                <span><?php echo Area::model()->get_area($model->hometown_id); ?></span>
            </li>
        </ul>
        <ul style="display: none;">
            <li>
                <label><?php echo $extend->getAttributeLabel('telephone'); ?>:</label>
                <span><?php echo $extend->telephone; ?></span>
            </li>
            <li>
                <label><?php echo $extend->getAttributeLabel('mobilephone'); ?>:</label>
                <span><?php echo $extend->mobilephone; ?></span>
            </li>
            <li>
                <label><?php echo $extend->getAttributeLabel('education'); ?>:</label>
                <span><?php echo $extend->education; ?></span>
            </li>
            <li>
                <label><?php echo $extend->getAttributeLabel('job'); ?>:</label>
                <span><?php echo $extend->job; ?></span>
            </li>
            <li>
                <label><?php echo $extend->getAttributeLabel('interest'); ?>:</label>
                <span><?php echo $extend->interest; ?></span>
            </li>
            <li>
                <label><?php echo $extend->getAttributeLabel('description'); ?>:</label>
                <span><?php echo $extend->description; ?></span>
            </li>
        </ul>
        <a href="#">修改资料</a>
    </div>
</div>