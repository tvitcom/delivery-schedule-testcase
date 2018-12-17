<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */
?>

<?php
$this->breadcrumbs = array(
    'Dispatchers' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Dispatcher', 'url' => array('index')),
    array('label' => 'Create Dispatcher', 'url' => array('create')),
    array('label' => 'View Dispatcher', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Dispatcher', 'url' => array('admin')),
);
?>

<h1>Update Dispatcher <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>