<?php
/* @var $this Controller */
$pillsOptions = array(
    array(
        'label' => 'Home',
        'url' => array('/site/index'),
        'active' => (
        Yii::app()->controller->id == 'site' && Yii::app()->controller
        ->action->id == 'index') ? true : false,
    ),
    array(
        'label' => 'Schedules',
        'url' => array('/calendar/index'),
        'visible' => !Yii::app()->user->isGuest,
        'active' => (Yii::app()->controller->id == 'calendar' && Yii::app()->controller
        ->action->id == 'index') ? true : false,
    ),
    array(
        'label' => 'AdminPanel',
        'url' => array('/crud/default'),
        'visible' => !Yii::app()->user->isGuest,
        'active' => (Yii::app()->controller->id == 'crud' && Yii::app()->controller
        ->action->id == 'default') ? true : false,
    ),
    array(
        'label' => 'Login',
        'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest,
        'active' => (Yii::app()->controller->id == 'site' && Yii::app()
        ->controller->action->id == 'login') ? true : false,
    ),
    array(
        'label' => 'Logout (' . Yii::app()->user->name . ')',
        'url' => array('/site/logout'),
        'visible' => !Yii::app()->user->isGuest,
        'active' => (Yii::app()->controller->id == 'default' && Yii::app()
        ->controller->action->id == 'page') ? true : false),
);

?>
<!DOCTYPE html>
<html lang="<?php echo isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'en'; ?>">
    <head>
        <base href="<?php echo $_SERVER['SERVER_NAME']; ?>">

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/favicon.ico">
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/jquery.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/jumbotron-narrow.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/html5shiv.min.js"></script>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/respond.min.js"></script>
        <![endif]-->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ie10-viewport-bug-workaround.js"></script>

        <meta name="description" content="<?php echo CHtml::encode($this->pageTitle); ?>">
        <meta name="author" content="">

        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <style>
            .jumbotron {
                padding-top: 30px;
                padding-bottom: 30px;
                margin-bottom: 30px;
                color: inherit;
                background-color: rgba(255, 206, 142, 0.4);
            }
            .jumbotron p {
                color: rgb(218, 121, 26);
            }
            .h1, .h2, .h3, h1, h2, h3 {
                color: #337AB7;
            }
            .btn-success .badge {
                color: rgba(74, 87, 74, 0.58);
                background-color: #FFCB87;
            }
            .badge {
                display: inline-block;
                min-width: 14px;
                padding: 6px 7px;
                font-size: 14px;
                font-weight: 700;
                line-height: 1;
                color: #FFF;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                background-color: #ADA01A;
                border-radius: 15px;
            }
        </style>
    </head>

    <body>

        <div class="container">

            <div class="header clearfix">
                <nav>
                    <?php
                    echo TbHtml::pills($pillsOptions, array(
                        'class' => 'nav nav-pills pull-right',
                    ));

                    ?>


                </nav>
                <h3 class="text-muted"><?php echo Yii::app()->params['CompanyName']; ?></h3>
            </div>

            <?php echo $content; ?>

            <footer class="footer">
                <p>© <?php echo date('Y'); ?> <?php
                    echo (!Yii::app()->user->isGuest) ? 'User' : 'Guest';
                    echo ' mode';

                    ?>
                    Отработало за
                    <?php echo sprintf('%0.5f', Yii::getLogger()->getExecutionTime());

                    ?>
                    с. Скушано памяти:
                    <?php echo round(memory_get_peak_usage() / (1024 * 1024), 2) . "MB"; ?>

                </p>
            </footer>
        </div> <!-- /container -->

        <!-- =================== Bootstrap core JavaScript ===================== -->
        <?php Yii::app()->bootstrap->register(); ?>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

