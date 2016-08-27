<?php
include_once 'Database.php';

$select="select * from books";


try {
	$stmt=$conn->query($select);
	/* while ($row =$stmt->fetch()){
		echo "Name: ".$row['name']."-".$row['description']."<br/>";
	} */
	
	while ($row =$stmt->fetch(PDO::FETCH_ASSOC)){
		echo "Name: ".$row['name']."-".$row['description']."<br/>";
		var_dump_pre($row);
	}
} catch (PDOException $ex) {
	echo "eror".$ex->getMessage();
}



function getFruit($conn) {
	$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
	foreach ($conn->query($sql) as $row) {
		print $row['name'] . "\t";
		print $row['color'] . "\t";
		print $row['calories'] . "\n";
	}
}

// getFruit();

?>