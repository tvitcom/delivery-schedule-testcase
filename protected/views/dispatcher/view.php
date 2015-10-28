<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */

$this->breadcrumbs=array(
	'Dispatchers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dispatcher', 'url'=>array('index')),
	array('label'=>'Create Dispatcher', 'url'=>array('create')),
	array('label'=>'Update Dispatcher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dispatcher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dispatcher', 'url'=>array('admin')),
);
?>

<h1>View Dispatcher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'fio',
		'passhash',
		'position',
	),
)); ?>
