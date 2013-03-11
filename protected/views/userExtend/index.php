<?php
/* @var $this UserExtendController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Extends',
);

$this->menu=array(
	array('label'=>'Create UserExtend', 'url'=>array('create')),
	array('label'=>'Manage UserExtend', 'url'=>array('admin')),
);
?>

<h1>User Extends</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
