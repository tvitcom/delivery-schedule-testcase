<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */


$this->breadcrumbs = array(
    'Dispatchers' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Dispatcher', 'url' => array('index')),
    array('label' => 'Create Dispatcher', 'url' => array('create')),
);
?>

<h1>Manage Dispatchers</h1>

<?php
$this->widget('\TbGridView', array(
    'id' => 'dispatcher-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'columns' => array(
        'id',
        'login',
        'fio',
        'position',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>