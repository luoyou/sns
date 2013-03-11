<?php
/* @var $this UserExtendController */
/* @var $model UserExtend */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-extend-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobilephone'); ?>
		<?php echo $form->textField($model,'mobilephone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mobilephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job'); ?>
		<?php echo $form->textField($model,'job',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest'); ?>
		<?php echo $form->textField($model,'interest',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'interest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_question'); ?>
		<?php echo $form->textField($model,'check_question',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'check_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_answer'); ?>
		<?php echo $form->textField($model,'check_answer',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'check_answer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->