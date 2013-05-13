<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->pageTitle; ?></title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/register.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="register_header">
    <span>注册<i>SNS</i></span>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'register-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
<div id="register_content">
    <div class="box">
        <label><?php echo $form->label($user,'username'); ?> </label>
        <span><?php echo $form->textField($user,'username',array('class'=>'register_input_style')); ?></span>
        <span class="prompt"><?php echo $form->error($user,'username'); ?></span>
    </div>
    <div class="box">
        <label><?php echo $form->label($user,'nickname'); ?> </label>
        <span><?php echo $form->textField($user,'nickname',array('class'=>'register_input_style')); ?></span>
        <span class="prompt"><?php echo $form->error($user,'nickname'); ?></span>
    </div>
    <div class="box">
        <label><?php echo $form->label($user,'password'); ?> </label>
        <span><?php echo $form->passwordField($user,'password',array('class'=>'register_input_style')); ?></span>
        <span class="prompt"><?php echo $form->error($user,'password'); ?></span>
    </div>
    <div class="box">
        <label><?php echo $form->label($user,'re_password'); ?> </label>
        <span><?php echo $form->passwordField($user,'re_password',array('class'=>'register_input_style')); ?></span>
        <span class="prompt"><?php echo $form->error($user,'re_password'); ?></span>
    </div>
    <div class="div">
        <?php echo CHtml::submitButton('立即注册', array('class'=>'register_button')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>

</body>
</html>
