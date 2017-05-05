<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
function display_error($error, 
                       $tag = 'i', 
                       $class = '2' ) {
    $opentag  = '<'  . $tag . ' class="' . $class . '">';
    $closetag = '</' . $tag . '>';
    echo $opentag . $error . $closetag;
}
//<p class="error">
display_error("text");
        


  /*function checktime($h, $m, $s) {
    return $h >= 0 && $h < 24 && $m >= 0 && $m < 60 
           && $s >= 0 && $s < 60; 
   
}*/



  




     
     /*  $b= '10' < 3;
        echo $b;
        
        echo 'apple' < 'orange';
        
        echo 'apple' < 'appletree';
        echo 'Orange' <'apple';*/
        
        ?>
    </body>
</html>
