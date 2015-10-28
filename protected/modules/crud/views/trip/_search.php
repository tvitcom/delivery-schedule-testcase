<?php
/* @var $this TripController */
/* @var $model Trip */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('\TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>21)); ?>

                    <?php echo $form->textFieldControlGroup($model,'region_id',array('span'=>5,'maxlength'=>21)); ?>

                    <?php echo $form->textFieldControlGroup($model,'equipage_id',array('span'=>5,'maxlength'=>21)); ?>

                    <?php echo $form->textFieldControlGroup($model,'start_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'assigned_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'dispatcher_id',array('span'=>5,'maxlength'=>21)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->