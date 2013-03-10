<?php
/* @var $this TalkController */
/* @var $model Talk */

$this->breadcrumbs=array(
	'Talks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Talk', 'url'=>array('index')),
	array('label'=>'Create Talk', 'url'=>array('create')),
	array('label'=>'Update Talk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Talk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Talk', 'url'=>array('admin')),
);
?>

<h1>View Talk #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'content',
		'transmit_count',
		'create_time',
	),
)); ?>
