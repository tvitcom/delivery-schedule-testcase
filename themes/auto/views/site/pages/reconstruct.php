<?php
/* @var $this SiteController */
?>
<header>
    <h1><?php echo Yii::t('site', 'Coming soon!'); ?></h1>
    <center>
        <img data-selector="img" src="http://myhouse/images/icons/chair.svg"
             style="width: 30%; outline: medium none; cursor: default;">
    </center></p>
</header>

<section>

    <p><?php echo Yii::t('site', 'Please') . '&nbsp;' . CHtml::link(Yii::t('site', 'let us know'), $this->createUrl('improvements/inform')); ?></a>
        <?php echo Yii::t('site', 'if you need this section.'); ?> <a href="<?php echo Yii::app()->user->returnUrl; ?>"><?php echo Yii::t('site', 'Go back'); ?></a>
    </p>

</section>

