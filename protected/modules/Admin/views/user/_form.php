<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_sign'); ?>
		<?php echo $form->textField($model,'user_sign',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'user_sign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english_name'); ?>
		<?php echo $form->textField($model,'english_name',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'english_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horoscope'); ?>
		<?php echo $form->textField($model,'horoscope'); ?>
		<?php echo $form->error($model,'horoscope'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_type'); ?>
		<?php echo $form->textField($model,'blood_type'); ?>
		<?php echo $form->error($model,'blood_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_live_id'); ?>
		<?php echo $form->textField($model,'current_live_id'); ?>
		<?php echo $form->error($model,'current_live_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hometown_id'); ?>
		<?php echo $form->textField($model,'hometown_id'); ?>
		<?php echo $form->error($model,'hometown_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->