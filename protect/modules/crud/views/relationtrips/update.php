<?php
/* @var $this RelationtripsController */
/* @var $model Relationtrips */
?>

<?php
$this->breadcrumbs=array(
	'Relationtrips'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Relationtrips', 'url'=>array('index')),
	array('label'=>'Create Relationtrips', 'url'=>array('create')),
	array('label'=>'View Relationtrips', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Relationtrips', 'url'=>array('admin')),
);
?>

    <h1>Update Relationtrips <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>