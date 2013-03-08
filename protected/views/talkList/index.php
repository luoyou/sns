<?php
/* @var $this TalkListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Talk Lists',
);

$this->menu=array(
	array('label'=>'Create Talk', 'url'=>array('Talk/create')),
	array('label'=>'Manage TalkList', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
