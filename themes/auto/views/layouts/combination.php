<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<h1><?php echo CHtml::encode($this->pageTitle); ?></h1>
<style>
    .jumbotron {
        background-color: rgba(246, 176, 125, 0.16);
    }
    .jumbotron p {
        color: #DD9586;
    }
    .h1, .h2, .h3, h1, h2, h3 {
        color: #337AB7;
    }
    .btn .badge {
        position: relative;
        top: 24px;
    }
    .btn-success .badge {
        color: #5294B9;
        background-color: #FFCE69;
    }
    .btn-default {
        color: #607AD4;
        background-color: #FFECD7;
        border-color: #41A7C2;
    }
    label {
        color: #337AB7;
    }
    .well {
        min-height: 20px;
        margin-bottom: 20px;
        background-color: rgba(223, 239, 116, 0.11);
        border: 1px solid #04C822;
        border-radius: 4px;
        box-shadow: 0px 1px 1px rgba(191, 196, 249, 0.8) inset;
    }
    blockquote {
        padding: 10px 20px;
        margin: 0px 0px 20px;
        font-size: 17.5px;
        border-left: 5px solid #00C2BB;
    }
    .form-control:focus {
        border-color: rgba(242, 146, 39, 0.61);
        outline: 0px none;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(13, 186, 155, 0.6);
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857;
        color: #0B6C5E;
        background-image: none;
        border: 1px solid #54AA67;
        border-radius: 4px;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
        transition: border-color 0.15s ease-in-out 1s, box-shadow 0.15s ease-in-out 0s;
    }
</style>

<div class="row">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>