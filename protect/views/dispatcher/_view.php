<?php
/* @var $this DispatcherController */
/* @var $data Dispatcher */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
    <?php echo CHtml::encode($data->login); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fio')); ?>:</b>
    <?php echo CHtml::encode($data->fio); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('passhash')); ?>:</b>
    <?php echo CHtml::encode($data->passhash); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
    <?php echo CHtml::encode($data->position); ?>
    <br />


</div>