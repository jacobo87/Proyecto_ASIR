<?php

define('DB_HOST', 'mysql');
define('DB_NAME', 'db');
define('DB_USER', 'user');
define('DB_PASSWORD', 'password');

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>