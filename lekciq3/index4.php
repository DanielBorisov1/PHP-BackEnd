<?php
//предаване по референция

$foo='BG';

bar($foo);
function bar(&$val) {
  $val=42;
} 