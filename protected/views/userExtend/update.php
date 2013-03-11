<?php
/* @var $this UserExtendController */
/* @var $model UserExtend */

$this->breadcrumbs=array(
	'User Extends'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserExtend', 'url'=>array('index')),
	array('label'=>'Create UserExtend', 'url'=>array('create')),
	array('label'=>'View UserExtend', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserExtend', 'url'=>array('admin')),
);
?>

<h1>Update UserExtend <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>