<?php
/* @var $this TripController */
/* @var $model Trip */
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
        <?php echo $form->label($model, 'region_id'); ?>
        <?php echo $form->textField($model, 'region_id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'equipage_id'); ?>
        <?php echo $form->textField($model, 'equipage_id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'start_date'); ?>
        <?php echo $form->textField($model, 'start_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'assigned_date'); ?>
        <?php echo $form->textField($model, 'assigned_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'is_full'); ?>
        <?php echo $form->textField($model, 'is_full'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'dispatcher_id'); ?>
        <?php echo $form->textField($model, 'dispatcher_id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->