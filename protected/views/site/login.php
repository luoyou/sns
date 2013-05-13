<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->pageTitle; ?></title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="transparent"></div>
<div class="login_form">
    <?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'login-form',
                                    'enableClientValidation'=>true,
                                    'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                    ),
        )); ?>
    <span>用户登录</span>
    <ul>
        <li class="prompt"><?php echo $form->error($model,'username'); ?></li>
        <li><?php echo $form->textField($model,'username',array('class'=>'input_style','placeholder'=>'用户名')); ?></li>

        <li class="prompt"><?php echo $form->error($model,'password'); ?></li>
        <li><?php echo $form->passwordField($model,'password',array('class'=>'input_style','placeholder'=>'密码')); ?></li>

        <li>
            <?php echo $form->checkBox($model,'rememberMe',array('class'=>'checkbox_style')); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
        </li>

        <li><?php echo CHtml::submitButton('登录',array('class'=>'submit_button')); ?>&nbsp;<?php echo CHtml::link('注册新账号',array('Site/Register')); ?></li>
    </ul>


    <?php $this->endWidget(); ?>
</div>

</body>
</html>
