<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
/* $this->breadcrumbs=array(
  'Login',
  ); */

?>

<header>
    <h1>
        <?php echo Yii::t('site', 'Login'); ?>
    </h1>
    <p>
        <?php echo Yii::t('site', 'Please fill out the following form with your login credentials:'); ?>
    </p>
    <p class="note">
        <?php echo Yii::t('site', 'Fields with'); ?>
        <span class="required">*</span>
        <?php echo Yii::t('site', 'are required.'); ?>
    </p>
</header>
<section>
    <div class = "form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));

        ?>

        <div class="row">
            <?php echo $form->labelEx($model, Yii::t('site', 'username')); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, Yii::t('site', 'password')); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>

        </div>

        <div class="row">
            <?php echo $form->label($model, Yii::t('site', 'remember.')); ?>
            <?php echo $form->checkBox($model, Yii::t('site', 'rememberMe')); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton(Yii::t('site', Yii::t('site', 'Login'))); ?>
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
</section>
