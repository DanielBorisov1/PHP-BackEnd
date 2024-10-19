<?php

$format = 'Y.m.d H:i:s';
$ts = time();
$ts+=3600;//добави час +
echo date ($format, $ts);



?>