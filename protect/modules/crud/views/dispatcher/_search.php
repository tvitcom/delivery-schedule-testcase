<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('\TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>21)); ?>

                    <?php echo $form->textFieldControlGroup($model,'login',array('span'=>5,'maxlength'=>20)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fio',array('span'=>5,'maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'passhash',array('span'=>5,'maxlength'=>64)); ?>

                    <?php echo $form->textFieldControlGroup($model,'position',array('span'=>5,'maxlength'=>45)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->