<?php
/* @var $this DispatcherController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->menu = array(
    array('label' => 'Manage Dispatcher', 'url' => array('admin')),
);
?>

<h1>Dispatchers</h1>

<?php
$this->widget('\TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>