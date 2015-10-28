<?php
/* @var $this EquipageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipages',
);

$this->menu=array(
	array('label'=>'Create Equipage', 'url'=>array('create')),
	array('label'=>'Manage Equipage', 'url'=>array('admin')),
);
?>

<h1>Equipages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
