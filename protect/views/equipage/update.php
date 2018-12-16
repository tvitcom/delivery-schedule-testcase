<?php
/* @var $this EquipageController */
/* @var $model Equipage */

$this->breadcrumbs=array(
	'Equipages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipage', 'url'=>array('index')),
	array('label'=>'Create Equipage', 'url'=>array('create')),
	array('label'=>'View Equipage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Equipage', 'url'=>array('admin')),
);
?>

<h1>Update Equipage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>