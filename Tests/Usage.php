<?php
/**
 * Created by PhpStorm.
 * User: Zhousilu
 * Date: 2016/8/20
 * Time: 16:11
 */

require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Monolog\Formatter\LineFormatter;
// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler('../Log/BasicUsage/my_app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->addInfo('My logger is now ready');
$logger->addInfo('Adding a new user', array('username' => 'Seldaek'));
$logger->pushProcessor(function ($record) {
    $record['extra']['dummy'] = 'Hello world!';

    return $record;
});



//Leveraging channels
//// Create some handlers
//$stream = new StreamHandler('../Log/BasicUsage/myapp.log', Logger::DEBUG);
//$firephp = new FirePHPHandler();
//
//// Create the main logger of the app
//$logger = new Logger('my_logger');
//$logger->pushHandler($stream);
//$logger->pushHandler($firephp);
//
//// Create a logger for the security-related stuff with a different channel
//$securityLogger = new Logger('security');
//$securityLogger->pushHandler($stream);
//$securityLogger->pushHandler($firephp);
//
//// Or clone the first one to only change the channel
//$securityLogger = $logger->withName('security');
//设置格式
//// the default date format is "Y-m-d H:i:s"
//$dateFormat = "Y n j, g:i a";
//// the default output format is "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n"
//$output = "%datetime% > %level_name% > %message% %context% %extra%\n";
//// finally, create a formatter
//$formatter = new LineFormatter($output, $dateFormat);
//
//// Create a handler
//$stream = new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG);
//$stream->setFormatter($formatter);
//// bind it to a logger object
//$securityLogger = new Logger('security');
//$securityLogger->pushHandler($stream);
//$securityLogger->addInfo('Formatter');

