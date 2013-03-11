<?php
/* @var $this UserExtendController */
/* @var $model UserExtend */

$this->breadcrumbs=array(
	'User Extends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserExtend', 'url'=>array('index')),
	array('label'=>'Manage UserExtend', 'url'=>array('admin')),
);
?>

<h1>Create UserExtend</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>