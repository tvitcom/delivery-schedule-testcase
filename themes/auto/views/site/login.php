<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';

?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';

?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array(
        'class' => 'form-horizontal'
    )
    ));

?>

<p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="form-group">
    <?php
    echo $form->labelEx($model, 'username', array(
        'for' => 'inputLogin3',
        'class' => 'col-sm-2 control-label',
    ));

    ?>
    <div class="col-sm-10">
        <?php
        echo $form->textField($model, 'username', array(
            'class' => 'form-control',
            'id' => 'inputLogin3',
            'placeholder' => 'Login',
        ));

        ?>
    </div>

    <?php
    echo $form->error($model, 'username', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div>

<div class="form-group">
    <?php
    echo $form->labelEx($model, 'password', array(
        'for' => 'inputPassword3',
        'class' => 'col-sm-2 control-label',
    ));

    ?>
    <div class="col-sm-10">
        <?php
        echo $form->passwordField($model, 'password', array(
            'class' => 'form-control',
            'id' => 'inputPassword3',
            'placeholder' => 'Password',
        ));

        ?>
    </div>

    <?php
    echo $form->error($model, 'password', array(
        'class' => 'alert alert-warning',
        'role' => 'alert',
    ));

    ?>
</div>

<div class = "form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">

            <label>
                <?php echo $form->checkBox($model, 'rememberMe'); ?><?php echo $form->label($model, 'rememberMe'); ?>
            </label>
            <?php
            echo $form->error($model, 'rememberMe', array(
                'class' => 'alert alert-warning',
                'role' => 'alert',
            ));

            ?>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-default')); ?>
        <?php echo CPasswordHelper::hashPassword('pass_to_way'); ?>
    </div>
</div>

<?php $this->endWidget(); ?>

