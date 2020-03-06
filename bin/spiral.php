<?php

declare(strict_types=1);

!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));

mb_internal_encoding('UTF-8');
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'stderr');

//Composer
require BASE_PATH . '/vendor/autoload.php';

(function(){
    //Initiating shared container, bindings, directories and etc
    $app = \App\App::init(['root' => BASE_PATH]);

    if ($app != null) {
        $app->serve();
    }
})();
