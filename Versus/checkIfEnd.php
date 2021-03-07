<?php

$clicks = file_get_contents("clicksToEnd.txt");

if(file_get_contents("red.txt") >= $clicks or file_get_contents("blue.txt")  >= $clicks){
	echo 1;
}
else{
	echo 0;
}


?>