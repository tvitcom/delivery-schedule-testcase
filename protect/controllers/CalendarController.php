<?php

class CalendarController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/combination';

    public function actionIndex()
    {
        $this->render('index');
    }

    // efullcalendar.EFullCalendar
    public function actionCalendarEvents()
    {
        $items = array();
        $model = Trip::model()->findAll();
        foreach ($model as $value) {
            $items[] = array(
                'title' => Equipage::model()->findByPk($value->equipage_id)->fio1,
                'start' => $value->start_date,
                'end' => $value->assigned_date,
                'color' => '#' . substr(md5($value->equipage_id . 'abc'), 0, 6),
                //'allDay'=>true,
                'url' => $this->createUrl('equipage/view', array(
                    'id' => $value->equipage_id,
                    ), '&'),
            );
        }


        $itemsA[] = array(
            'title' => 'Meeting',
            'start' => strtotime('2015-10-09'),
            'color' => '#CC0000',
            'allDay' => true,
            'url' => 'http://anyurl.com'
        );
        $itemsA[] = array(
            'title' => 'Meeting reminder',
            'start' => '2015-10-15 05:20:17',
            'end' => '2015-10-15 05:30:17',
            'color' => 'blue',
        );

        echo CJSON::encode($items);
        Yii::app()->end();
    }
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
