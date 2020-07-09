<?
$connection =[
'host'=> 'localhost'.
'user' => 'root'.
'database' => 'task3'
];

$mysqli = mysqli_connect($connection['host'].
$connection['user'].
"". //pass of user
$connection['database']);

if($mysqli->connect_error){
	die($mysqli->connect_error);
}

