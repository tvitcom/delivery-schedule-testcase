<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html>
<html lang="<?php echo isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'en'; ?>">
    <head>
        <base href="<?php echo $_SERVER['SERVER_NAME']; ?>">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dash/jquery.js"></script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/dash/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dash/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/html5shiv.min.js"></script>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo Yii::app()->params['CompanyName']; ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label' => 'Calendar', 'url' => array('/calendar/index', 'month' => '')),
                            array('label' => 'Profile (' . Yii::app()->user->name . ')', 'url' => array('/dispatcher/view', 'id' => Yii::app()->user->id), 'visible' => !Yii::app()->user->isGuest),
                            array('label' => 'Exit', 'url' => array('/site/logout')),
                        ),
                        'htmlOptions' => array(
                            'class' => 'nav navbar-nav navbar-right',
                        ),
                    ));

                    ?>
                    <form class="navbar-form navbar-right">
                        <input class="form-control" placeholder="Search..." type="text">
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-md-2 sidebar">
                    <?php
                    echo TbHtml::navList(
                        array(
                        array('label' => 'PEOPLE:'),
                        array(
                            'label' => 'Dispatchers',
                            'url' => array('/crud/dispatcher/admin'),
                            'active' => (Yii::app()->controller->id == 'association' && Yii::app()->controller
                            ->action->id == 'admin') ? true : false,
                        ),
                        array(
                            'label' => 'Equipages',
                            'url' => array('/crud/equipage/index'),
                            'active' => (Yii::app()->controller->id == 'house' && Yii::app()->controller
                            ->action->id == 'admin') ? true : false,
                        ),
                        array('label' => 'LOCATIONS:'),
                        array(
                            'label' => 'Regions',
                            'url' => array('/crud/region/index'),
                            'active' => (Yii::app()->controller->id == 'emplacement' && Yii::app()->controller
                            ->action->id == 'admin') ? true : false,
                        ),
                        array('label' => 'ASSETS:'),
                        array(
                            'label' => 'Relate trip-region',
                            'url' => array('/crud/relationtrips/index'),
                            'active' => (Yii::app()->controller->id == 'participation' && Yii::app()->controller
                            ->action->id == 'admin') ? true : false,
                        ),
                        array(
                            'label' => 'Trips',
                            'url' => array('/crud/trip/index'),
                            'active' => (Yii::app()->controller->id == 'project' && Yii::app()->controller
                            ->action->id == 'admin') ? true : false,
                        ),
                        ), array(
                        'class' => 'nav nav-sidebar'
                        )
                    );

                    ?>
                </div>

                <div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 main">

                    <div class="table-responsive">
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

                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dash/holder.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dash/ie10-viewport-bug-workaround.js"></script>


        <svg style="visibility: hidden; position: absolute; top: -100%; left: -100%;" preserveAspectRatio="none" viewBox="0 0 200 200" height="200" width="200">
        <defs>
        </defs>
        <text style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle" y="10" x="0">
        200x200
        </text>
        </svg>
    </body>
</html>