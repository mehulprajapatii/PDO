<?php
include_once 'Database.php';

if (isset ( $_POST ['name'] ) && isset ( $_POST ['description'] )) {
	$name = $_POST ['name'];
	$desc = $_POST ['description'];
	
	try {
		$create = "Insert into tasks";
		$create .= " set name=:name";
		$create .= " ,description=:desc ";
		
		$stmt = $conn->prepare ( $create );
		
		$stmt->execute ( array (
				":name" => $name,
				":desc" => $desc 
		) );
		if ($stmt) {
			echo "Record Inserted ";
		}
	} catch ( PDOException $e ) {
		echo "Error" . $e->getMessage ();
	}
}

?>
