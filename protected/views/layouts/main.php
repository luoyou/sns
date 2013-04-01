<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/public.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/personal.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/talk.js"></script>
</head>

<body>
<div id="header">
    <div id="logo"></div>
    <div id="nav">
        <ul>
            <li><?php echo CHtml::link('个人中心', array('Message/Index')); ?></li>
            <li><a href="#">我的主页</a></li>
            <li><a href="#">应用</a></li>
            <li><input type="text" value="搜&nbsp;&nbsp;说说/日志……" id="input_search" /><i class="search_icon"></i></li>
            <li class="user_little_pic">
                <?php if(Yii::app()->user->isGuest): ?>
                    <?php echo CHtml::link('[登录]',array('Site/login')); ?>
                <?php else: ?>
                    <?php echo CHtml::link("<img src='".Yii::app()->request->baseUrl."/images/pic_little.jpg' />", array('User/view')); ?>   
                <?php endif ?>
            </li>
            <li>
                <?php if(Yii::app()->user->isGuest): ?>
                    <?php echo CHtml::link('[注册]',array('Site/login')); ?>
                <?php else: ?>    
                    <span>落忧</span><span class="quit"><?php echo CHtml::link('[退出]', array('Site/logout')); ?></span>
                <?php endif ?>
            </li>
            <li><a href="#" class="user_set"></a></li>
            <li><a href="#" class="message"></a></li>
        </ul>
    </div>
</div>

<?php echo $content; ?>

<div id="footer">
	Copyright © 2013 - 2030 luo.All Rights Reserved.<br/>
	个人落忧 版权所有
</div>
</body>
</html>
