<?php
/* @var $this TripController
 * @var $model Trip objects
 * @var $form CActiveForm
 * @var $region Region objects
 */

?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'trip-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    ));

?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php
echo $form->errorSummary($model, null, null, array(
    'class' => 'alert alert-warning',
    'role' => 'alert',
));

?>

<div class="form-group field-register-name requirementd"">
    <?php echo $form->labelEx($model, 'region_id'); ?>
    <?php
    echo $form->dropDownList($model, 'region_id', Region::regionOpts($region->id), array(
        'disabled' => 'on',
        'class' => 'form-control',
    ));

    ?>
    <p class="text-danger"><?php echo $form->error($model, 'region_id'); ?></p>
</div><!-- row -->

<div class="form-group field-register-name requirement">
    <?php
    echo $form->labelEx($model, 'start_date', array(
    ));

    ?>
    <?php
    echo $form->dateField($model, 'start_date', array(
        'class' => 'form-control',
        'value' => date('Y-m-d'),
        'data-provide' => 'datepicker',
        'type' => 'text',
    ));

    ?>
    <?php
    echo $form->error($model, 'start_date', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div><!-- row -->

<div class="form-group field-register-text requirementd">
    <?php echo $form->labelEx($model, 'equipage_id'); ?>
    <?php
    echo $form->dropDownList($model, 'equipage_id', $this->equipageOpts(), array(
        'empty' => 'will selected*',
        'class' => 'form-control',
    ));

    ?>
    <?php
    echo $form->error($model, 'equipage_id', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div><!-- row -->


<div class="form-group checkbox requirementd">

    <label>
        <?php echo $form->checkBox($model, 'is_full', array('checked' => 'true')); ?>
    </label>
    <?php echo $form->labelEx($model, 'is_full'); ?>
    <?php
    echo $form->error($model, 'is_full', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div><!-- row -->

<div class="form-group field-register-name requirementd">
    <?php echo $form->labelEx($model, 'dispatcher_id'); ?>
    <?php
    echo $form->dropDownList($model, 'dispatcher_id', $this->dispatcherOpts(), array(
        'empty' => 'will selected*',
        'class' => 'form-control',
    ));

    ?>
    <?php
    echo $form->error($model, 'dispatcher_id', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div><!-- row -->

<?php
echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
    'class' => 'btn btn-primary',
));

?>

<?php $this->endWidget(); ?>
