<?php
/* @var $this RegionController */
/* @var $data Region */
?>

<div class="view">

    <?php echo CHtml::link(CHtml::encode($data->name), $this->createUrl('trip/create', array('region_id' => $data->id))); ?>
    <?php echo CHtml::encode($data->distance) . '(km)'; ?>
    <?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:
    <?php echo CHtml::encode($data->duration); ?>

</div>