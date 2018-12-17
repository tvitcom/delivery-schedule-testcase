<?php
/* @var $this RegionController */
/* @var $data Region */
?>

<div class="view">

    <?php echo CHtml::encode($data->id); ?>
    <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>

    <?php echo CHtml::encode($data->distance) . ' km '; ?>
    <?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>
    <?php echo CHtml::encode($data->duration) . ' hours'; ?>

    <br />


</div>