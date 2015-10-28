<?php
/* @var $this RegionController */
/* @var $model Region */
/* @var $form CActiveForm */

?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('\TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));

    ?>

    <?php echo $form->textFieldControlGroup($model, 'id', array('span' => 5, 'maxlength' => 21)); ?>
    <?php echo $form->textFieldControlGroup($model, 'name', array('span' => 5, 'maxlength' => 52)); ?>
    <?php echo $form->textFieldControlGroup($model, 'distance', array('span' => 5)); ?>
    <?php echo $form->textFieldControlGroup($model, 'duration', array('span' => 5)); ?>
    <?php echo $form->textFieldControlGroup($model, 'description', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->textAreaControlGroup($model, 'pathway', array('rows' => 6, 'span' => 8)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton('Search', array('color' => TbHtml::BUTTON_COLOR_PRIMARY,)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->