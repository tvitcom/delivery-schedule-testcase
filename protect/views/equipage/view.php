<?php
/* @var $this EquipageController */
/* @var $model Equipage */

$this->breadcrumbs = array(
    'Equipages' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Shedule Equipages', 'url' => $this->createUrl('calendar/index')),
    array('label' => 'Create Equipage', 'url' => array('create')),
);
?>

<h1>View Equipage #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'fio1',
        'fio2',
    ),
));
?>
