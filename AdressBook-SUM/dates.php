<?php
/*$format = 'Y.m.d H:i:s';
$ts = time();
$ts+=3600;//добави час +
echo date ($format, $ts);*/

$result = file('data.txt');
echo '<pre>'. print_r($result, true). '</pre>';




?>