<?php
/* @var $this TalkListController */
/* @var $model TalkList */

$this->breadcrumbs=array(
	'Talk Lists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TalkList', 'url'=>array('index')),
	array('label'=>'Create TalkList', 'url'=>array('create')),
	array('label'=>'View TalkList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TalkList', 'url'=>array('admin')),
);
?>

<h1>Update TalkList <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>