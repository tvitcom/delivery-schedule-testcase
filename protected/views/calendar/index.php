<?php
/* @var $this CalendarController */

$this->breadcrumbs = array(
    'Calendar',
);

?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p><?php
    echo 'fullcalendar.EFullCalendarHeart:<br />';
    /*
      $this->widget('application.extensions.fullcalendar.EFullCalendarHeart', array(
      //'themeCssFile'=>'cupertino/jquery-ui.min.css',
      'options' => array(
      'header' => array(
      'left' => 'prev,next,today',
      'center' => 'title',
      'right' => 'month,agendaWeek,agendaDay',
      ),
      'events' => $this->createUrl('latihan/training/calendarEvents'), // URL to get event
      )));
     */
    echo '<br />efullcalendar.EFullCalendar:<br />';
    /*
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
      'style' => 'width:100%'
      ),
      // FullCalendar's options.
      // Documentation available at
      // http://arshaw.com/fullcalendar/docs/
      'options' => array(
      'header' => array(
      'left' => 'prev,next',
      'center' => 'title',
      'right' => 'today'
      ),
      'lazyFetching' => true,
      'events' => 'calendarEventsUrl', // action URL for dynamic events, or
      'events' => array(), // pass array of events directly
      // event handling
      // mouseover for example
      'eventMouseover' => new CJavaScriptExpression("js_function_callback"),
      )
      ));
     */

    ?>


</p>
