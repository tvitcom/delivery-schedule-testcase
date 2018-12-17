<?php
/* @var $this TripController */
/* @var $data Trip */
?>

<div class="view">

    <?php echo CHtml::link(CHtml::encode($data->region_id), array('update', 'id' => $data->id)); ?>

    <?php echo CHtml::encode($data->getAttributeLabel('equipage_id')); ?>
    <?php echo CHtml::encode($data->equipage_id); ?>

    <?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>
    <?php echo CHtml::encode($data->start_date); ?>

    <?php echo CHtml::encode($data->getAttributeLabel('assigned_date')); ?>
    <?php echo CHtml::encode($data->assigned_date); ?>

    <?php echo CHtml::encode($data->getAttributeLabel('dispatcher_id')); ?>
    <?php echo CHtml::encode($data->dispatcher_id); ?>

</div>