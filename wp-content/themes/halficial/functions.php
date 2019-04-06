<?php
require ABSPATH.'/wp-libraries/autoload.php';
// 自动加载类
spl_autoload_register(function($class) {
    $locator = __DIR__."\\libraries\\$class";
    $path = str_replace($locator, "\\", DIRECTORY_SEPARATOR);
    if (is_file($path)) require $path;
});