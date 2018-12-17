<?php
/* @var $this RegionController */
/* @var $model Region */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('\TbActiveForm', array(
        'id' => 'region-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'name', array('span' => 5, 'maxlength' => 52)); ?>

    <?php echo $form->textFieldControlGroup($model, 'distance', array('span' => 5)); ?>
    <?php echo $form->textFieldControlGroup($model, 'duration', array('span' => 5)); ?>
    <?php echo $form->textFieldControlGroup($model, 'description', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->textAreaControlGroup($model, 'pathway', array('rows' => 6, 'span' => 8)); ?>

    <div class="form-actions">
<?php
echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'size' => TbHtml::BUTTON_SIZE_LARGE,
));
?>
    </div>

        <?php $this->endWidget(); ?>

</div><!-- form -->