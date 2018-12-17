<?php
/* @var $this RegionController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = 'Select region of destination:';
?>

<div class="col-lg-6" style="overall-search">
    <div class="input-group">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'overall-search-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // See class documentation of CActiveForm for details on this,
            // you need to use the performAjaxValidation()-method described there.
            'enableAjaxValidation' => false,
        ));

        echo $form->errorSummary($model, array(
            'class' => 'label label-warning',
        ));

        echo $form->searchField($model, 'search_string', array(
            'class' => 'form-control',
            'placeholder' => 'Search location',));
        ?>

        <span class="input-group-btn">
<?php
echo CHtml::submitButton('Searching', array(
    'class' => 'btn btn-default',
    'type' => 'button',
));
?>
        </span>

            <?php
            echo $form->error($model, 'search_string', array(
                'class' => 'alert alert-info',
                'role' => 'alert',
            ));
            ?>



        <?php $this->endWidget(); ?>

    </div><!-- form -->

        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>
    <br /><?php
    echo CHtml::button('Create', array(
        'submit' => array('region/create'),
        'class' => 'btn btn-primary',
    ));
    ?><br />

</div><!-- /.col-lg-6 -->




