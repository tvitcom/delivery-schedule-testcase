<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="wrapper">

    <div class="content-main">
        <div id="register-item">
            <?php echo $content; ?>
        </div><!-- register-item -->
    </div>
    <div class="content-secondary">
        <div id="well well-sm">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => 'Operations:',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'htmlOptions' => array('class' => 'nav nav-pills'),
            ));
            $this->endWidget();
            ?>
        </div><!--well well-sm -->
    </div>
</div>

<?php $this->endContent(); ?>