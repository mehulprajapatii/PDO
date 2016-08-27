<?php
include_once 'Database.php';

$table="CREATE TABLE IF NOT EXISTS books
		(
		id int unsigned not null primary key auto_increment,
		name varchar(255) not null unique,
		description varchar(255) not null,
		create_date timestamp
		)";

try {
	$conn->query($table);
	echo "<br/> Table Created";
} catch (PDOException $ex) {
	echo "error".$ex->getMessage();
}

?>