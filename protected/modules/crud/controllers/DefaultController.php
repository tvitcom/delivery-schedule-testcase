<?php

class DefaultController extends Controller
{
    public $layout = '//layouts/dashboard';

    public function actionIndex()
    {
        $this->redirect($this->createUrl('/crud/dispatcher/admin'));
    }
}
