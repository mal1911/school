<?php
require __DIR__ . '/../vendor/yiisoft/yii2/yii.php';
$config = require __DIR__ . '/../config/web.php';
(new yii\web\Application($config))->run();