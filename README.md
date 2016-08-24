# Monolog-PHP 日志记录类
[![Total Downloads](https://img.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)
[![Latest Stable Version](https://img.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)
[![Reference Status](https://www.versioneye.com/php/monolog:monolog/reference_badge.svg)](https://www.versioneye.com/php/monolog:monolog/references)

Monolog用于发送日志到文件、sockets、邮箱、数据库和其余多种web服务上。请参阅下面的handler完整列表。某些特殊handler允许你构建高级日志策略。

该库实现PSR-3接口，你可以在自己的库中键入提示来保证最大的互操作性。你也可以在自己的应用程序中使用这个库，以保证你可以在之后随时可以使用另一个兼容的记录器。1.11.0版本的Monolog公共接口也接受PSR-3 日志标准，由于比PSR-3要早，内部的Monolog仍然使用自己的标准。

## 安装
用composer安装最新版本：
```
$ composer require monolog/monolog
```
##  基本使用
```
<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
```
## Document

- [Usage Instructions]()
- [Handlers, Formatters and Processors]()
- [Utility classes]()
- [Extending Monolog]()

## 第三方包
[wiki](https://github.com/Seldaek/monolog/wiki/Third-Party-Packages)上列出了第三方处理器、标准格式列表、当你发布一个自己的库时也可以自行添加。

## 关于
### 要求
- Monolog 要求PHP 5.3或以上，同时也测试了HHVM。

### 提交bug和功能请求
bug和功能请求可以在github上追踪

### 框架集成
- 由于Monolog实现PSR-3接口，所已使用PSR-3标准的框架和库都很可以很容易的使用Monolog。
- Silex comes out of the box with Monolog.
- Silex comes out of the box with Monolog.
- Laravel 4 & 5 come out of the box with Monolog.
- Lumen comes out of the box with Monolog.
- PPI comes out of the box with Monolog.
- CakePHP is usable with Monolog via the cakephp-monolog plugin.
- Slim is usable with Monolog via the Slim-Monolog log writer.
- XOOPS 2.6 comes out of the box with Monolog.
- Aura.Web_Project comes out of the box with Monolog.
- Nette Framework can be used with Monolog via Kdyby/Monolog extension.
- Proton Micro Framework comes out of the box with Monolog.
- FuelPHP come out of the box with Monolog.
- Equip Framework comes out of the box with Monolog.
- 
### 作者
Jordi Boggiano - j.boggiano@seld.be - http://twitter.com/seldaek
项目其余参与者列表也可以看到。

### 许可证

Monolog满足MIT许可证

### 致谢

该库受到了 Python 的LogBook库的启发，对该库的大部分内容进行调整以适应PHP语言。
