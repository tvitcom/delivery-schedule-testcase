<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */
?>

<?php
$this->breadcrumbs=array(
	'Dispatchers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dispatcher', 'url'=>array('index')),
	array('label'=>'Manage Dispatcher', 'url'=>array('admin')),
);
?>

<h1>Create Dispatcher</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>