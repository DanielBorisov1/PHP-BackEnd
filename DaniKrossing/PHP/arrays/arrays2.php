<?php
//associative array
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
];

if (isset($guitars2['Prs'])) {
  echo $guitars2 ['Prs'];   
} else {
    echo 'Guitar does not exist';
}

