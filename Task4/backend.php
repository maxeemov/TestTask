<?php

$get= $_POST["search"];
$subject = $_POST["comment"];

$string1= preg_replace('/\"(.*?)\"/' ,'', $get);//dellet strings in quotes
$string1=rtrim ($string1);//delete spase of string1 end
$array = preg_split("/\s+/", $string1); //split the srting1

 
$string2 = preg_replace('/((.*) "|" (.*))/' ,'', $get);//delete strings around quotes
$string2 = str_replace('"' ,'', $string2);//delete quots
$string2=rtrim ($string2);//delete spase of string2 end
array_push($array,$string2); //add string2 in to arraylist

$array1=$array;

for ($i=0;$i<=count($array)-1;$i++){
	$array1[$i]='<font  color=red>'.$array1[$i].'</font>';
}

str_replace($array,$array1,$subject,$count);

if($count!=0){

	echo str_replace($array,$array1,$subject);
}
else echo "Not faund"; 



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="index.html" method="post">
	<p><input type="submit"  value="назад"> </p>
	</form>
</body>
</html>

