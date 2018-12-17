<?php
/* @var $this DispatcherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Dispatchers',
);

$this->menu = array(
    array('label' => 'Create Dispatcher', 'url' => array('create')),
    array('label' => 'Manage Dispatcher', 'url' => array('admin')),
);
?>

<h1>Dispatchers</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
