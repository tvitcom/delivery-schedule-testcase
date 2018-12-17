<?php
/* @var $this DispatcherController */
/* @var $model Dispatcher */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'dispatcher-form',
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
        <?php echo $form->labelEx($model, 'login'); ?>
<?php echo $form->textField($model, 'login', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fio'); ?>
<?php echo $form->textField($model, 'fio', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'fio'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'passhash'); ?>
<?php echo $form->textField($model, 'passhash', array('size' => 60, 'maxlength' => 64)); ?>
<?php echo $form->error($model, 'passhash'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'position'); ?>
<?php echo $form->textField($model, 'position', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'position'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->