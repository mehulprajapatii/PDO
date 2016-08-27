<?php
include_once 'Database.php';

if (isset ( $_POST ['id'] )) {
	$id = $_POST ['id'];
	
	
	try {
		$delete = "update tasks";
		$delete .= " set sta=:sta";
		$delete .= " where id=:id ";
		
		$stmt = $conn->prepare ( $delete );
		
		$stmt->execute ( array (
				":sta" => 'D',
				":id" => $id 
		) );
		if ($stmt) {
			echo "Record Deleted Successfully ";
		}
	} catch ( PDOException $e ) {
		echo "Error" . $e->getMessage ();
	}
}

?>
