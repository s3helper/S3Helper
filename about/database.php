<?php

$user = "id15986286_jackthetoolboy"; //Enter the user name
$password = "QS@1Ft#qe*w=(!G("; //Enter the password
$host = "localhost"; //Enter the host
$dbase1 = "id15986286_s3buddy"; //Enter the database

$connect=mysqli_connect($host,$user,$password,$dbase1);

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>