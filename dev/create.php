<?php
include_once 'Database.php';
//$create_data=date("Y-m-d h:i:sa");
$insertQuery="insert into books set ";
$insertQuery.=" name='Insert into JAVA'";
$insertQuery.=", description='learn all about java'";
//$insertQuery .="create_date=now()";

$insertQuery1="insert into books set ";
$insertQuery1.=" name='Insert into PHP'";
$insertQuery1.=", description='learn all about php'";
//$insertQuery1 .="create_date= now();



$name="PDO1";
$description="This is  description1";
try {
	//build the query
	$inset="insert into books";
	$inset .= " set name=:name";
	$inset .=" ,description=:descirption";
	
	$inset1="insert into books";
	$inset1 .= " set name=? ";
	$inset1 .=" ,description=?";
	
	//prepared the query
	$statment=$conn->prepare($inset1);
	
	//execute the statemtent
	//$statment->execute(array(":name"=>$name,":descirption"=>$description));
	$statment->execute(array($name,$description));
	echo "inserted";
} catch (PDOException $e) {
	echo "error".$e->getMessage();
}

try {
	//$result=$conn->exec($insertQuery);
// 	$result=$conn->query($insertQuery);
	echo $result."record inserted<br/>";
	
	//$result=$conn->exec($insertQuery1);
	echo $result."record inserted<br/>";
	
} catch (PDOException $ex) {
	echo "eror".$ex->getMessage();
}
?>