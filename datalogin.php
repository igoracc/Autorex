<?php

$servername = "localhost";
$username = "igor";
$password = "";
$dbname="autorex";

/// create connection
$conn=new mysqli($servername, $username, $password,$dbname);

/// check connwection

if($conn->connect_error)
{
	die("Nema konekcije: ".$conn->connect_error);
}
echo "Konektovano uspjesno";


?>