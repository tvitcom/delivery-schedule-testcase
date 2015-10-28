<?php
/* @var $this EquipageController */
/* @var $data Equipage */
?>

<div class="view">
1231
	<?php echo CHtmlencode($data->getAttributeLabel('id')); ?>
	<?php echo CHtmllink(CHtmlencode($data->id), array('view', 'id'=>$data->id)); ?>
	

	<?php echo CHtmlencode($data->getAttributeLabel('fio1')); ?>
	<?php echo CHtmlencode($data->fio1); ?>
	

	<?php echo CHtmlencode($data->getAttributeLabel('fio2')); ?>
	<?php echo CHtmlencode($data->fio2); ?>
	


</div>
