<?php

session_start();
session_unset();
session_destroy();

require_once ('./../inc/functions.inc.php');

header("Location: php-sessions-login.php");

die();
