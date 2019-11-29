<!DOCTYPE html>
<html>
<head>
	<title>TITLE</title>
</head>
<body>
	
	<table border='1'>
		<tr><td colspan='2'>Table Heading</td><tr>
		<tr><th>ID</td><td>Name</td>
	</table>

<?php
$count=0
$name="";
while ($count<10) {
	$count++;
	$id="id$count";
	$name.="a";
	echo "<tr>
		<td>$id</td>
		<td>$name</td>
		";
}


?>
		

</body>
</html>
