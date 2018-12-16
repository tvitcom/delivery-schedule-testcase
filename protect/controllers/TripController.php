<?php

class TripController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/combination';

    /**
     * Integrate script for suitable datepicker
     * @param type $action
     * @return register script and doing parent before action
     */
    protected function beforeAction($action) {
        $cs = Yii::app()->clientScript;
        $cs->packages = array(
            'pickmeup' => array(
                'basePath' => 'application.vendor.nazar-pc.pickmeup',
                'baseUrl',
                'js' => array('demo.js', 'jquery.pickmeup.js'),
                'css' => array('pickmeup.min.css', 'demo.css'),
                'depends' => array('jquery'),
            ),
        );
        $cs->registerPackage('pickmeup');
        return parent::beforeAction($action);
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            /*
              array('allow',  // allow all users to perform 'index' and 'view'
             * actions
              'actions'=>array(),
              'users'=>array('*'),
              ),
              array('allow', // allow authenticated user to perform 'create' and
             * 'update' actions
              'actions'=>array(),
              'users'=>array('@'),
              ), */
            array('allow', // allow admin user to perform 'admin' and 'delete'
//actions
                'actions' => array(
                    'index',
                    'view',
                    'create',
                    'update',
                    'admin',
                    'delete',
                    'whattimeisit',
                    'availequipages',
                ),
                'users' => array('admin', 'dispatcher'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($region_id) {
        $model = new Trip;
        $region = Region::model()->findByPk($region_id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Trip'])) {
            $model->attributes = $_POST['Trip'];
            if ($model->save())
                $this->redirect(array('calendar/index'));
        }
        if ($region_id > 0) {
            $this->render('create', array(
                'model' => $model,
                'region' => $region,
            ));
        } else {
            $this->redirect(array('site/index'));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Trip'])) {
            $model->attributes = $_POST['Trip'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Trip');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Trip('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Trip']))
            $model->attributes = $_GET['Trip'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Trip the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Trip::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Trip $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trip-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Static function for dropDownList _form of Trip controller
     */
    public function equipageOpts() {
        return CHtml::listData(Equipage::model()->findAll('in_route is null'), 'id', 'fio1');
    }

    /**
     * Static function for dropDownList _form of Trip controller
     */
    public function dispatcherOpts() {
        return CHtml::listData(Dispatcher::model()->findAll(), 'id', 'position');
    }

    /**
     * Алгоритм. Этот метод выводит те экипажи которые не задействованы
     * в этом промежутке в других доставках.
     * @var $_POST start_date
     * @var $_POST region_id
     * Описание алгоритма:
     * 1) Определяем время промежутка как:
     *    [дата начала поездки] + [время выгрузки] + [время возврата];
     * 2) Запрашиваем все экипажи из БД которх нет в результате запроса поездок
     *    в полученном промежутке;
     * 3) Формируем результат для отправки в формате select option для dropdown полей.
     * */
    public function actionAvailequipages() {

// Получаем и подготавливаем принятые данные:
        if (isset($_POST)) {
//получаем длительности
            preg_match("/\d{4}-\d{2}-\d{2}/", $_POST['start_date'], $str);
            $start_date = $str[0];
            $region_id = intval($_POST['region_id']);

            $obRegion = Region::model()->findByPk($region_id);
            $dateClientArrival = LogisticCore::calcDateToClientArrival(
                    $start_date, $obRegion->duration);

//    1) Определяем время промежутка как:
//    [дата начала поездки] + [время выгрузки] + [время возврата];

            $finish_date = LogisticCore::calcDateToHomeArrival($start_date, $obRegion->duration);
            /*
             * select equipage_id from trips
             * where ('2015-10-23' BETWEEN start_date AND '2015-10-25')
             * or ('2015-10-24' BETWEEN start_date AND '2015-10-25')';
             */
            $sql = 'select dataready.equipage_id from (select trips.equipage_id, '
                . 'trips.start_date, date_format(date_add(trips.assigned_date,INTERVAL ('
                . '@my + 2 * (select regions.duration from regions where '
                . "regions.id = trips.region_id)) HOUR),'%Y-%m-%d') as finish_date "
                . 'from trips) as dataready '
                . 'where (' . $start_date . ' BETWEEN dataready.start_date and dataready.finish_date) '
                . 'OR (' . $finish_date . ' BETWEEN dataready.start_date and dataready.finish_date)';
            $connection = Yii::app()->db;
            $result = $connection->createCommand($sql)->queryAll();
            //var_dump($result);
            Yii::app()->end();

//   2) Запрашиваем все экипажи из БД которых нет в результате запроса поездок на указанный период
//    в полученном промежутке;
            $data = Equipage::model()->findAll('id=:region_id', array(
                ':region_id' => (int) $_POST['region_id'],
            ));
//   3) Формируем результат для отправки в формате select option для dropdown полей.

            $data = CHtml::listData($data, 'id', 'fio1' . 'fio2');

//Подготовка данных к отправке в нужном формате:
            $available_equipages = "<option value=''>Select equipage</option>";
            foreach ($data as $value => $city_name)
                $available_equipages .= CHtml::tag('option', array(
                        'value' => $value), CHtml::encode($city_name), true
                );
            /* echo CJSON::encode(array(
              'arrival_date' => date('H:i:s'),
              'available_equipages' => $available_equipages,
              )); */
        } else {/*
          echo CJSON::encode(array(
          'arrival_date' => 'error 500',
          'available_equipages' => 'error 500',
          )); */
        }
        Yii::app()->end();
    }

    public function actionWhattimeisit() {
        echo date('H:i:s');
        Yii::app()->end();
    }

}
