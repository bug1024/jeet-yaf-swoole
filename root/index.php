<?php

define("ROOT_PATH", __DIR__ . "/");
define("APP_PATH", ROOT_PATH . "../");

$app = new Yaf_Application(APP_PATH . "conf/conf.ini");
$app->bootstrap()->run();


