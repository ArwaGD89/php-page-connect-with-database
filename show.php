<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color: #3F4F6F; 
	}
</head>
</head>
<body>

</body>
</html>





<?php

$result = "SELECT 'Right', 'Left', 'Forward', 'Backworad', 'Stop' FROM 'Buttons'

      ORDER BY id DESC
      LIMIT 1";

 $query = mysqli_query($mysqli, $result) or die(mysql_error());
 while($row= mysqli_fetch_assoc($query))(
    foreach ($row as $row){
    	print "$row\t";
    }
    }
    ?>