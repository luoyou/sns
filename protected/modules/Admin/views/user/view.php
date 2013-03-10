<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		//'pic',
		'nickname',
		'user_sign',
		'name',
		'english_name',
		'gender',
		//'birthday',
		array('label'=>'birthday','value'=>date('Y-m-d',$model->birthday)),
        'horoscope',
		'blood_type',
		//'current_live_id',
		array('label'=>'current_live_id','value'=>Area::model()->get_area($model->current_live_id)),
        //'hometown_id',
        array('label'=>'hometown_id','value'=>Area::model()->get_area($model->hometown_id)),
	),
)); ?>
