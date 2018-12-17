<?php
/* @var $this RegionController */
/* @var $model Region */
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
<?php echo $form->label($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 52, 'maxlength' => 52)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'distance'); ?>
        <?php echo $form->textField($model, 'distance'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'duration'); ?>
        <?php echo $form->textField($model, 'duration'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'description'); ?>
        <?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'pathway'); ?>
        <?php echo $form->textArea($model, 'pathway', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->