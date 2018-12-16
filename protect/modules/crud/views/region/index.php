<?php
/* @var $this RegionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Regions',
);

$this->menu=array(
	array('label'=>'Create Region','url'=>array('create')),
	array('label'=>'Manage Region','url'=>array('admin')),
);
?>

<h1>Regions</h1>

<?php $this->widget('\TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>