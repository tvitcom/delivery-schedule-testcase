<?php
/* @var $this TripController
 * @var $model Trip objects
 * @var $form CActiveForm
 * @var $region Region objects
 */

?>

<div class="row form col-md-8">

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

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'region_id'); ?>
        <?php
        echo $form->dropDownList($model, 'region_id', Region::regionOpts($region->id), array(
            'disabled' => 'on',
        ));

        ?>
        <?php echo $form->error($model, 'region_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'equipage_id'); ?>
        <?php
        echo $form->dropDownList($model, 'equipage_id', $this->equipageOpts(), array(
            'empty' => 'will selected*'
        ));

        ?>
        <?php echo $form->error($model, 'equipage_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'start_date'); ?>
        <?php echo $form->textField($model, 'start_date'); ?>
        <?php echo $form->error($model, 'start_date'); ?>
    </div>
    <?php
    echo CHtml::ajaxLink(
        'Test request', // the link body (it will NOT be HTML-encoded.)
        array('trip/test'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
        array(
        'update' => '#req_res'
        )
    );

    ?>
    <div id="req_res" class="well-sm">test messages!</div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'assigned_date');  ?>
        <?php //echo $form->textField($model, 'assigned_date'); ?>
        <?php //echo $form->error($model, 'assigned_date');    ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'is_full'); ?>
        <?php echo $form->textField($model, 'is_full'); ?>
        <?php echo $form->error($model, 'is_full'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'dispatcher_id'); ?>
        <?php
        echo $form->dropDownList($model, 'dispatcher_id', $this->dispatcherOpts(), array(
            'empty' => 'will selected*'
        ));

        ?>
        <?php echo $form->error($model, 'dispatcher_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
