<?php
require_once 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" herf=""> 
<style>
	body{
		background-color: #3F4F6F; 
	}
	.buttons{
		background-color: #E7E4E1;


	}
	.btn{
		background-color: #856C52;
		border-color: #9543C2;
		margin: 0;
	}
	.stop{
		background-color: red;
		border-color: red;
		position: absolute;
		top: 20%;
		left: 50%;
	}
</style>
</head>
<body>
	<div class="controller">
		<br><br>
		<div class="buttons text-center" role="group">
			<form action="" method="post">
				<br><br><br><br>
				<button type="submit" class="stop btn-danger">Stop	</button>
				<br><br>
				<button type="submit" name="R" class="btn btn-secondary">Right</button>
				<button type="submit" name="L" class="btn btn-secondary">Left</button>
				<button type="submit" name="F" class="btn btn-secondary">Forwards</button>
				<button type="submit" name="B" class="btn btn-secondary">Backwords</button>
				<br><br><br><br>
				
			</form>
		</div>
	</div>

</body>
</html>


<?php
$result ='';
if (isset($_POST["R"])) {
	$result = 'R';
	$sql = "INSERT INTO 'buttons' ('Left', 'Right', 'Backword', 'Forward', 'Stop') VALUES ('', '$result', '', '', '');
	if(mysqli_query($mysqli, $sql)){
	  echo "Records inserted successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql." . mysqli_error($mysqli);}
	mysqli_close($mysqli);}

elseif (isset($_POST["L"])) {
	$result = 'L';
	$sql = "INSERT INTO 'buttons' ('Left', 'Right', 'Backword', 'Forward', 'Stop') VALUES ('$result', '', '', '', '');
	if(mysqli_query($mysqli, $sql)){
	  echo "Records inserted successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql." . mysqli_error($mysqli);}
	mysqli_close($mysqli);
	
}

elseif (isset($_POST["B"])) {
	$result = 'B';
	$sql = "INSERT INTO 'buttons' ('Left', 'Right', 'Backword', 'Forward', 'Stop') VALUES ('', '', '$result', '', '');
	if(mysqli_query($mysqli, $sql)){
	  echo "Records inserted successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql." . mysqli_error($mysqli);}
	mysqli_close($mysqli);
	
}
elseif (isset($_POST["F"])) {
	$result = 'F';
	$sql = "INSERT INTO 'buttons' ('Left', 'Right', 'Backword', 'Forward', 'Stop') VALUES ('', '', '', '$result', '');
	if(mysqli_query($mysqli, $sql)){
	  echo "Records inserted successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql." . mysqli_error($mysqli);}
	mysqli_close($mysqli);
	
}

else (isset($_POST["S"])) {
	$result = 'S';
	$sql = "INSERT INTO 'buttons' ('Left', 'Right', 'Backword', 'Forward', 'Stop') VALUES ('', '', '', '', '$result');
	if(mysqli_query($mysqli, $sql)){
	  echo "Records inserted successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql." . mysqli_error($mysqli);}
	mysqli_close($mysqli);
	
}
?>