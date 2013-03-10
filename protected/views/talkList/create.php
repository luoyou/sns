<?php
/* @var $this TalkListController */
/* @var $model TalkList */

$this->breadcrumbs=array(
	'Talk Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TalkList', 'url'=>array('index')),
	array('label'=>'Manage TalkList', 'url'=>array('admin')),
);
?>

<h1>Create TalkList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>