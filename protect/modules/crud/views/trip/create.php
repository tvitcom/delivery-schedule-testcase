<?php
/* @var $this TripController */
/* @var $model Trip */
?>

<?php
$this->breadcrumbs=array(
	'Trips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trip', 'url'=>array('index')),
	array('label'=>'Manage Trip', 'url'=>array('admin')),
);
?>

<h1>Create Trip</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>