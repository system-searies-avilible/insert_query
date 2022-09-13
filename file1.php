<?php
$server="localhost";
$username="root";
$password="";
$database="test";


$connect=mysqli_connect($server,$username,$password,$database);

$insert=mysqli_query($connect,"insert into student values('','muzamil','akbar','23');");

if($insert){
	echo"data inserted";
	
}
else{
	echo"data can't be insert";
	
}




?>