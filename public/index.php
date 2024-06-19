<?php

use App\Core\Router;

require_once '../vendor/autoload.php';
define("webRoot","http://localhost:8000");


session_start();

Router::route();