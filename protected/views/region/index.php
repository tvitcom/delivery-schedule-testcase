<?php
/* @var $this RegionController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Select region of destination:</h1>
<div class="search-form" style="overall-search">
    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'overall-search-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // See class documentation of CActiveForm for details on this,
            // you need to use the performAjaxValidation()-method described there.
            'enableAjaxValidation' => false,
        ));

        echo $form->errorSummary($model);

        ?>

        <div class="row">
            <?php echo $form->textField($model, 'search_string'); ?>
            <?php echo $form->error($model, 'search_string'); ?>
            <?php echo CHtml::submitButton('Searching'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div><!-- search-form -->
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));

?>
<br /><?php echo CHtml::button('Create', array('submit' => array('region/create'))); ?><br />
