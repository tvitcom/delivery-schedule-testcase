<?php
/* @var $this RelationtripsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Relationtrips',
);

$this->menu=array(
	array('label'=>'Create Relationtrips','url'=>array('create')),
	array('label'=>'Manage Relationtrips','url'=>array('admin')),
);
?>

<h1>Relationtrips</h1>

<?php $this->widget('\TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>