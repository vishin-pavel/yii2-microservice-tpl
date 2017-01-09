<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'default');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

if (getenv('YII_ENV') == 'default') {
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../environments/default');
    $dotenv->load();
}

$config = require(__DIR__ . '/../config/common/web.php');

(new yii\web\Application($config))->run();
