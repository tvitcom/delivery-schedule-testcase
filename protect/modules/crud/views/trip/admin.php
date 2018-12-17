<?php
/* @var $this TripController */
/* @var $model Trip */

$this->menu = array(
    array('label' => 'List Trip', 'url' => array('index')),
    array('label' => 'Create Trip', 'url' => array('create')),
);
?>

<h1>Manage Trips</h1>

<?php
$this->widget('\TbGridView', array(
    'id' => 'trip-grid',
    'dataProvider' => $model->search(),
    //'filter'=>$model,
    'columns' => array(
        'id',
        'region_id',
        'equipage_id',
        'start_date',
        'assigned_date',
        'dispatcher_id',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>