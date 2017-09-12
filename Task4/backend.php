<?php

$get= $_POST["search"];
$subject = $_POST["comment"];

$string1= preg_replace('/\"(.*)\"/' ,'', $get);//dellet strings in quotes
$array = preg_split("/\s+/", $string1); //split the srting

$string2 = preg_replace('/(!?(.*) \")|(\" (.*))/' ,'', $get);//delete strings around quotes
$string2 = str_replace('"' ,'', $string2);//delete quots
array_push($array,$string2); //add string2 in to arraylist
print_r($array);
echo preg_replace( $array, '!!!!!!!!!!!!!!!' , $subject);

?>


