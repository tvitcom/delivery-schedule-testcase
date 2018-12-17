<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class=" row col-md-8">
        <div id="register-item">
            <?php echo $content; ?>
        </div><!-- register-item -->
    </div>
    <div class="row col-md-4">
        <div id="well well-sm">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => 'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'htmlOptions' => array('class' => 'operations'),
            ));
            $this->endWidget();
            ?>
        </div><!--well well-sm -->
    </div>
</div>

<?php $this->endContent(); ?>