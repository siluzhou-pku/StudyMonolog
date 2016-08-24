<?php
/**
 * Created by PhpStorm.
 * User: Zhousilu
 * Date: 2016/8/17
 * Time: 11:22
 */

require '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('../Log/BasicUsage/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');