<?php
/* @var $this EquipageController */
/* @var $data Equipage */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)) . ' '; ?>
	

	<?php echo CHtml::encode($data->fio1) . ' '; ?>
	

	<?php echo CHtml::encode($data->fio2) . ' '; ?><br />
	


</div>
