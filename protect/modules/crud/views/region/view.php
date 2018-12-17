<?php
/* @var $this RegionController */
/* @var $model Region */
?>

<?php
$this->breadcrumbs = array(
    'Regions' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Region', 'url' => array('index')),
    array('label' => 'Create Region', 'url' => array('create')),
    array('label' => 'Update Region', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Region', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Region', 'url' => array('admin')),
);
?>

<h1>View Region #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'distance',
        'duration',
        'description',
        'pathway',
    ),
));
?>