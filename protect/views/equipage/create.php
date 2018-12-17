<?php
/* @var $this EquipageController */
/* @var $model Equipage */

$this->breadcrumbs = array(
    'Equipages' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Equipage', 'url' => array('index')),
    array('label' => 'Manage Equipage', 'url' => array('admin')),
);
?>

<h1>Create Equipage</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>