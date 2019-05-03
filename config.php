<?php
define('DB_NAME', 'phpapp01');
define('DB_USER', 'loger');
define('DB_PASS', 'loger');
define('ROOT', __DIR__);

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on" ? "https" : "http" )."://$_SERVER[HTTP_HOST]";

define('ROOT_URL', $link);

date_default_timezone_set('Asia/Ho_Chi_Minh');
