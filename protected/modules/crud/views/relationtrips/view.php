<?php
/* @var $this RelationtripsController */
/* @var $model Relationtrips */
?>

<?php
$this->breadcrumbs=array(
	'Relationtrips'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Relationtrips', 'url'=>array('index')),
	array('label'=>'Create Relationtrips', 'url'=>array('create')),
	array('label'=>'Update Relationtrips', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Relationtrips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Relationtrips', 'url'=>array('admin')),
);
?>

<h1>View Relationtrips #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'trip_id',
		'region_id',
	),
)); ?>