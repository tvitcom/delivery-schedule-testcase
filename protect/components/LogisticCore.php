<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppointmentBase
 *
 * @author a tvitcom
 */
class LogisticCore {

    /**
     * Compute date when courier will be deliver cargo
     * @return datetime
     */
    public static function calcDateToClientArrival($startDate = '0000-00-00', $duration = 0) {
        $date = new DateTime($startDate);
        $summaryTime = Yii::app()->params['departureTime'] + $duration;
        $date->setTime($summaryTime, 00);
        return $date->format('Y-m-d');
    }

    /**
     * Compute date when courier will be return to office
     * @return datetime
     */
    public static function calcDateToHomeArrival($startDate = '0000-00-00', $duration = 0) {
        $date = new DateTime($startDate);
        $summaryTime = Yii::app()->params['departureTime'] + 2 * $duration + Yii::app()->params['TimeOfDischarging'];
        $date->setTime($summaryTime, 00);
        return $date->format('Y-m-d');
    }

}
