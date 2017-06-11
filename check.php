<?php

extension_loaded("yaf") or die("yaf not found, https://github.com/laruence/yaf");

extension_loaded("swoole") or die("swoole not found, https://github.com/swoole/swoole-src");

echo "yaf: ", YAF_VERSION, " is installed \n";
echo "swoole: ", SWOOLE_VERSION, " is installed \n";

