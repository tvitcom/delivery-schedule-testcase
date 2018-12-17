<?php
/* @var $this RelationtripsController */
/* @var $data Relationtrips */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('trip_id')); ?>:</b>
    <?php echo CHtml::encode($data->trip_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('region_id')); ?>:</b>
    <?php echo CHtml::encode($data->region_id); ?>
    <br />


</div>