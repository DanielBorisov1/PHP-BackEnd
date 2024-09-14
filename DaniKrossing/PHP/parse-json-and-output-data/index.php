<?php

require ('app/app.php');


$view_bag = [
    'title'=> 'Glossary list',
];


view('index', get_terms());

