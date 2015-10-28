<?php

class CalendarController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout = '//layouts/dashboard';

    public function actionIndex()
    {
        $this->render('index');
    }

    // fullcalendar.EFullCalendarHeart
    public function actionCalendarEvents()
    {
        $items = array();
        $model = Trip::model()->findAll();
        foreach ($model as $value) {
            $items[] = array(
                'title' => $value->name,
                'start' => $value->start,
                'end' => date('Y-m-d', strtotime('+1 day', strtotime($value->finish))),
                //'color'=>'#CC0000',
                //'allDay'=>true,
                //'url'=>'http://anyurl.com'
            );
        }
        echo CJSON::encode($items);
        Yii::app()->end();
    }
    /**
     * EFullCalendar.EFullCalendar
      public function actionCalendarEvents()
      {
      $items[] = array(
      'title' => 'Meeting',
      'start' => '2012-11-23',
      'color' => '#CC0000',
      'allDay' => true,
      'url' => 'http://anyurl.com'
      );
      $items[] = array(
      'title' => 'Meeting reminder',
      'start' => '2012-11-19',
      'end' => '2012-11-22',
      // can pass unix timestamp too
      // 'start'=>time()
      'color' => 'blue',
      );

      echo CJSON::encode($items);
      Yii::app()->end();
      }
     *
     * */
// Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class' => 'path.to.FilterClass',
      'propertyName' => 'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1' => 'path.to.ActionClass',
      'action2' => array(
      'class' => 'path.to.AnotherActionClass',
      'propertyName' => 'propertyValue',
      ),
      );
      }
     *
     */
}
