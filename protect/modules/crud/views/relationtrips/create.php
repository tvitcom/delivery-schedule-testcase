<?php
/* @var $this RelationtripsController */
/* @var $model Relationtrips */
?>

<?php
$this->breadcrumbs=array(
	'Relationtrips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Relationtrips', 'url'=>array('index')),
	array('label'=>'Manage Relationtrips', 'url'=>array('admin')),
);
?>

<h1>Create Relationtrips</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>