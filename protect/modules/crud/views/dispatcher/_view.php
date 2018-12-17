<?php
/* @var $this DispatcherController */
/* @var $data Dispatcher */
?>

<div class="view">

    <?php echo CHtml::link(CHtml::encode($data->position), array('view', 'id' => $data->id)); ?> -
    <?php echo CHtml::encode($data->fio) . ', '; ?>
    <?php echo CHtml::encode($data->getAttributeLabel('Application login')); ?>:
    <?php echo CHtml::encode($data->login); ?>
    <br />

</div>