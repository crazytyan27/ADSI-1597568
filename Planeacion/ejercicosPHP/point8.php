<?php
 
// in this example we tell php to concatenate the value of the string variable
//to what's after the equal sign.
 
$cadena = "hello world!";
 
$cadena .= "This is connected ";
 
echo $cadena;
 
//concatenate when printing or displaying on screen
echo "this is a" . "concatenated chain";
 
// * We take this opportunity to give an example of the reuse of variables
//on this occasion we are saying that the string value will be re-allocated
// and that its new value will have the previous one and a more concatenated chain
 
$cadena = "This is a new";
 
$cadena = $cadena . "concatenate form";
 
echo $cadena;
 
?>