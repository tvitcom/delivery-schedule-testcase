<?php
/* @var $this TripController */
/* @var $data Trip */
?>

<div class="view">

    <?php echo CHtml::encode($data->getAttributeLabel('id')); ?>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>

    <?php echo CHtml::encode($data->region_id); ?>

    <?php echo CHtml::encode('equipage_id'); ?>
    <?php echo CHtml::encode($data->equipage_id); ?>

    <?php echo CHtml::encode('start_date'); ?>
    <?php echo CHtml::encode($data->start_date); ?>

    <?php echo CHtml::encode('assigned_date'); ?>
    <?php echo CHtml::encode($data->assigned_date); ?>

    <?php echo CHtml::encode('dispatcher_id'); ?>
    <?php echo CHtml::encode($data->dispatcher_id); ?><br />

</div>
