<?php
include_once 'Database.php';
// print_r($_POST);
if (isset ( $_POST ['name'] ) && isset ( $_POST ['id'] )) {
	$name = trim($_POST ['name']);
	$id = $_POST ['id'];
	
	try {
		$update = "update tasks";
		$update .= " set name=:name";
		$update .= " where id=:id ";
		//echo $update;
		$stmt = $conn->prepare ( $update );
		
		$stmt->execute ( array (
				":name" => $name,
				":id" => $id 
		) );
		if ($stmt->rowCount()== 1) {
			echo "Record Name  Updated ";
		}else{
			echo "No chnages made";
		}
	} catch ( PDOException $e ) {
		echo "Error" . $e->getMessage ();
	}
}else if (isset ( $_POST ['description'] ) && isset ( $_POST ['id'] )) {
	$description =trim($_POST ['description']);
	$id = $_POST ['id'];
	
	try {
		$update = "update tasks";
		$update .= " set description=:description";
		$update .= " where id=:id ";
	//	echo $update;
		$stmt = $conn->prepare ( $update );
		
		$stmt->execute ( array (
				":description" => $description,
				":id" => $id 
		) );
		/* if ($stmt) {
			echo "Record Description  Updated ";
		} */
		if ($stmt->rowCount()== 1) {
			echo "Record Description  Updated ";
		}else{
			echo "No chnages made";
		}
	} catch ( PDOException $e ) {
		echo "Error" . $e->getMessage ();
	}
}else if (isset ( $_POST ['status'] ) && isset ( $_POST ['id'] )) {
	$status =trim($_POST ['status']);
	$id = $_POST ['id'];
	
	try {
		$update = "update tasks";
		$update .= " set status=:status";
		$update .= " where id=:id ";
	//	echo $update;
		$stmt = $conn->prepare ( $update );
		
		$stmt->execute ( array (
				":status" => $status,
				":id" => $id 
		) );
		if ($stmt->rowCount()== 1) {
			echo "Record status  Updated ";
		}else{
			echo "No chnages made";
		}
	} catch ( PDOException $e ) {
		echo "Error" . $e->getMessage ();
	}
}

?>