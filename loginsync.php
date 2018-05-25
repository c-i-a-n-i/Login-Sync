<?php
$con = mysqli_connect("localhost", "ciani", "LZJiwGrgSsEu1qrk","ciani");

$username = $_POST["username"];
$appname = $_POST["app_name"];

$res = mysqli_query($con, "insert into apps(username, app) values('$username', '$appname')");


if($res)
{
	echo "inserted";
}else
{
	echo "not inserted";
}


?>