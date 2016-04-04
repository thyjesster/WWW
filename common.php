<?php
    session_start();
    require_once('config.php');

    define('AUTOLOAD_ENABLED', TRUE);
    spl_autoload_register(
        function ($class)
        {
            include(__DIR__.'/classes/'.$class.'.class.php');
        }
    );