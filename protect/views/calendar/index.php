<?php
/* @var $this CalendarController */
$this->pageTitle = 'Delivery schedule';
?>

<div class="calendar">
    <?php
    //$this->widget('application.extensions.efullcalendar.EFullCalendar', array(
    $this->widget('application.extensions.efullcalendar.EFullCalendar', array(
        // polish version available, uncomment to use it
        // 'lang'=>'pl',
        // you can create your own translation by copying locale/pl.php
        // and customizing it
        // remove to use without theme
        // this is relative path to:
        // themes/<path>
        'themeCssFile' => 'cupertino/theme.css',
        // raw html tags
        'htmlOptions' => array(
            // you can scale it down as well, try 80%
            'style' => 'width:100%',
        ),
        // FullCalendar's options.
        // Documentation available at
        // http://arshaw.com/fullcalendar/docs/
        'options' => array(
            'header' => array(
                'left' => 'prev,next',
                'center' => 'title',
                'right' => 'today',
            ),
            'lazyFetching' => true,
            'events' => $this->createUrl('calendar/CalendarEvents'), // action URL for dynamic events, or
            //'events' => array(), // pass array of events directly
            // event handling
            // mouseover for example
            'editable' => false,
            'selectable' => true,
        //'eventMouseover' => new CJavaScriptExpression("mouseover"),
        ),
    ));
    ?>
</div><br />
    <?php
    echo CHtml::linkButton('New task for delivery', array(
        'class' => 'btn btn-md btn-success',
        'href' => $this->createUrl('region/index'),
    ));
    ?>
