<?php
// This is the database connection configuration.
return array(
    /*
      'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
     */
    // uncomment the following lines to use a MySQL database
    'connectionString' => 'mysql:host=localhost;dbname=way',
    /* SQL statements that should be executed right after the DB
      connection is established. */
    'initSQLs' => array("set time_zone='+02:00';"),
    'schemaCachingDuration' => 3600,
    'emulatePrepare' => true,
    'username' => 'way',
    'password' => 'pass_to_way',
    'charset' => 'utf8',
    // включаем профайлер
    'enableProfiling' => true,
    // показываем значения параметров
    'enableParamLogging' => true,
);
