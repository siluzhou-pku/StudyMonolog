<?php
/**
 * Created by PhpStorm.
 * User: Zhousilu
 * Date: 2016/8/24
 * Time: 18:58
 */

require '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use App\PDOHandler;


// create a log channel
$log = new Logger('name');
$logger->pushHandler(new PDOHandler(new PDO('sqlite:logs.sqlite')));

// You can now use your logger
$logger->addInfo('My logger is now ready');