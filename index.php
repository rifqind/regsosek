<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
require('_protected/vendor/autoload.php');
require('_protected/vendor/yiisoft/yii2/Yii.php');
require('_protected/common/config/bootstrap.php');
require('_protected/frontend/config/bootstrap.php');
$config = yii\helpers\ArrayHelper::merge(
    require('_protected/common/config/main.php'),
    require('_protected/common/config/main-local.php'),
    require('_protected/frontend/config/main.php'),
    require('_protected/frontend/config/main-local.php')
);
$application = new yii\web\Application($config);
$application->run();

