<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24dhendriksen_net24dhendriksen_netwerkentoet';
$dbpass = 'C3ks]D=JFq@X';
$dbname = 'net24dhendriksen_netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>