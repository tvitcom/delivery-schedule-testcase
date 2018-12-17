<?php
/* @var $this EquipageController */
/* @var $model Equipage */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
<?php echo $form->label($model, 'id'); ?>
<?php echo $form->textField($model, 'id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'fio1'); ?>
<?php echo $form->textField($model, 'fio1', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'fio2'); ?>
<?php echo $form->textField($model, 'fio2', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->