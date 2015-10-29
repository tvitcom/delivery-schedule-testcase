<?php

class TripController extends Controller
{
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
    protected function beforeAction($action)
    {
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
    public function filters()
    {
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
    public function accessRules()
    {
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
                    'test',
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
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($region_id)
    {
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
    public function actionUpdate($id)
    {
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
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Trip');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
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
    public function loadModel($id)
    {
        $model = Trip::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Trip $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trip-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Static function for dropDownList _form of Trip controller
     */
    public function equipageOpts()
    {
        return CHtml::listData(Equipage::model()->findAll('in_route is null'), 'id', 'fio1');
    }

    /**
     * Static function for dropDownList _form of Trip controller
     */
    public function dispatcherOpts()
    {
        return CHtml::listData(Dispatcher::model()->findAll(), 'id', 'position');
    }

    public function actionEquipageIsAvailable($date)
    {
        return;
    }

    /**
     * Some testing in application
     */
    public function actionTest()
    {
        echo date('H:i:s');
        Yii::app()->end();
    }
}
