<?php
/* @var $this EquipageController */
/* @var $data Equipage */
?>

<div class="view">
    1231
    <?php echo CHtml::encode($data->getAttributeLabel('id')); ?>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>


    <?php echo CHtml::encode($data->getAttributeLabel('fio1')); ?>
    <?php echo CHtml::encode($data->fio1); ?>


    <?php echo CHtml::encode($data->getAttributeLabel('fio2')); ?>
    <?php echo CHtml::encode($data->fio2); ?>



</div>
