<?php

function get_terms()
{

    $json = get_data();

    return json_decode($json);
}


function get_term($term)
{
    $terms = get_terms();

    foreach ($terms as $item) {
        if ($item->term == $term) {
            return $item;
        }
    }
}

function get_data()
{
    $fname = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fname)) {
        file_put_contents($fname, '');
        /*  $handle = fopen($fname,'w+'); // Open for reading and writing "W+"
     fclose($handle);*/
    } else {
        $json = file_get_contents($fname);
        /* $handle = fopen ($fname, 'r'); //read only "r"
        $json = fread($handle, filesize($fname));
        fclose($handle);*/
    }

    return $json;
}
