<?php
//сигурността на сесията
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strickt_mode', 1);


session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true

]);

session_start();
session_regenerate_id(true);


if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    session_create_id('');
    $_SESSION['last_regeneration'] = time();
}

else {
    $interval = 60 * 30;

    if (time() - $_SESSION['last_regeneration'] >= $interval) {

        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
