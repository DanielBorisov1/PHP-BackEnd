<?php

function get_terms()
{
    $json = get_data();
    return json_decode($json);
}

/*Функцията казва на Term, че преминава през всички наши елементи  
ако има съответстващ термин, той просто връща този елемент не търси останалата част от масива
всякакви други съвпадения, ако намери съвпадение, го връща и тогава е готово*/
function get_term($term)
{
    $terms = get_terms();

    foreach ($terms as $item) {
        if ($item->term == $term) {
            return $item;
        }
    }
}

//SEACRH
function search_terms($search)
{
    $items = get_terms();
    /*  array_map(fn, arr)
     array_filter(arr, fn)*/

    $results = array_filter($items, function ($item) use ($search) {
        // truthy 1
        // 1 -12354 -1
        // 'asdafasf'

        // falsey 0

      
         //strpos -stringposition; $item->term-CSS; $search= key word C for CSS
        if (strpos($item->term, $search) !== false) {
            return $item;
        }

        /*   'hello, world'
         strpos('hello, world', 'ello') //1
         strpos('hello, world', 'he') //0
         strpos('hello, world', 'z') // false no anyware "z"

         */
    });

    return $results;
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
