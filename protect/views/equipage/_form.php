<?php
/* @var $this EquipageController */
/* @var $model Equipage */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'equipage-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
<?php echo $form->labelEx($model, 'fio1'); ?>
        <?php echo $form->textField($model, 'fio1', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'fio1'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'fio2'); ?>
        <?php echo $form->textField($model, 'fio2', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'fio2'); ?>
    </div>

    <div class = "row">
<?php echo $form->label($model, 'in_route'); ?>
        <?php echo $form->checkBox($model, 'in_route', array('disabled' => 'on')); ?>
        <?php echo $form->error($model, 'in_route'); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->