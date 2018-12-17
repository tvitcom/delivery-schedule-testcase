<?php
/* @var $this EquipageController */
/* @var $model Equipage */
?>

<?php
$this->breadcrumbs = array(
    'Equipages' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Equipage', 'url' => array('index')),
    array('label' => 'Create Equipage', 'url' => array('create')),
    array('label' => 'Update Equipage', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Equipage', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Equipage', 'url' => array('admin')),
);
?>

<h1>View Equipage #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data' => $model,
    'attributes' => array(
        'id',
        'fio1',
        'fio2',
    ),
));
?>