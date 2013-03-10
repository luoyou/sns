<?php
/* @var $this TalkListController */
/* @var $model TalkList */

$this->breadcrumbs=array(
	'Talk Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TalkList', 'url'=>array('index')),
	array('label'=>'Create TalkList', 'url'=>array('create')),
	array('label'=>'Update TalkList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TalkList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TalkList', 'url'=>array('admin')),
);
?>

<h1>View TalkList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'user_id',
		array('name'=>'user_id','value'=>$model->user->nickname),
		//'talk_id',
		array('name'=>'talk_id','value'=>$model->content->content),
        'comment_id',
        //array('label'=>'comment','value'=>1231321),
		'comment_count',
		'create_time',
	),
)); ?>
