<?php
date_default_timezone_set('Europe/Vilnius');

define('ROOT', __DIR__);
define('DB_FILE', ROOT . '/app/data/db.json');

// App
require 'app/functions/form/validators.php';

// Core
require 'core/functions/html.php';
require 'core/functions/form/validators.php';

//Composer
require 'vendor/autoload.php';
require 'app/Config/Routes.php';


