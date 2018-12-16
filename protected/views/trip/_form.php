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
<p>Go back and <?php echo CHtml::link('select region', $this->createUrl('region/index')); ?> again?</p>
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
        'id' => 'region_id',
        'class' => 'form-control',
    ));

    ?>
    <p class="text-danger"><?php echo $form->error($model, 'region_id'); ?></p>
</div><!-- .form-group field-register-name requirementd -->
<br>
<!-- --------------------TEST END ----------------- -->

<div class="form-group field-register-name requirement">
    <?php
    echo $form->labelEx($model, 'start_date', array(
    ));

    ?>

    <?php
    echo $form->dateField($model, 'start_date', array(
        'class' => 'form-control',
        'value' => date('Y-m-d'),
        'id' => 'Trip_start_date',
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
<?php
echo CHtml::ajaxLink('Find all available equipages', array('availequipages'), array(
    'type' => "POST",
    'data' => array(
        'start_date' => "js:function(){a = $('#Trip_start_date').val();return a;}",
        'region_id' => "js:function(){b = $('#region_id').val();return b;}",
    ),
    'success' => "js:function(data){
       //var param = JSON.parse (data);
       //$('#delivery_date').html(param.arrival_date);
       //$('#forAjaxRefresh').html(param.available_equipages);
}"
    ), array(
    'color' => 'orange',
));

?>
<div id="forAjaxRefresh"></div>
<div class="form-group field-register-name requirement">
    <?php
    echo $form->labelEx($model, 'assigned_date', array(
    ));

    ?>
    <div class="form-control delivery_date" id="delivery_date"></div>

</div><!-- form-group field-register-name requirement-->




<div class="form-group field-register-text requirementd">
    <?php echo $form->labelEx($model, 'equipage_id'); ?>
    <?php
    echo $form->dropDownList($model, 'equipage_id', $this->equipageOpts(), array(
        'empty' => 'will selected*',
        'class' => 'form-control',
        'id' => 'equipage_delivery'
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
