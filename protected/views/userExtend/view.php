<?php
/* @var $this UserExtendController */
/* @var $model UserExtend */

$this->breadcrumbs=array(
	'User Extends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserExtend', 'url'=>array('index')),
	array('label'=>'Create UserExtend', 'url'=>array('create')),
	array('label'=>'Update UserExtend', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserExtend', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserExtend', 'url'=>array('admin')),
);
?>

<h1>View UserExtend #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'telephone',
		'mobilephone',
		'education',
		'job',
		'interest',
		'description',
		'create_time',
		'check_question',
		'check_answer',
	),
)); ?>
