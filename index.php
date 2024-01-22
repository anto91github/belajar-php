<?php
    //declare variable
    $phi = 3.14;

    //declare const
    define('phi', 3.14);

   function printVar()
   {
        global $phi;
        echo $phi;
   }

   function printConst()
   {
        echo phi;
   }

   printVar();
   echo '<br/>';
   printConst();
?>
