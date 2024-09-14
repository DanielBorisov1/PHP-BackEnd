<?php

/* $_GET, $_POST = special variables used tp colledct data from an HTML form
                   data is sent to the file in the action attribute of <form>
                   <form action="some_file.php" method="get">
                   
  
 //$_GET = Data is appended to url
           NOT SECURE
           char limit
           Bookmark is possible w/ values
           Get request can be cached
           Better for a search page
           
           

//$_POST = Data is packaged inside the body of the HTTP request
           MORE SECURE
           No data limit
           Cannot bookmark 
           Get request are not cached
           Better for submitting credentials           

*/
