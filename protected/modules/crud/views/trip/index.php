<?php
/* @var $this TripController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Trips',
);

$this->menu=array(
	array('label'=>'Create Trip','url'=>array('create')),
	array('label'=>'Manage Trip','url'=>array('admin')),
);
?>

<h1>Trips</h1>

<?php $this->widget('\TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>