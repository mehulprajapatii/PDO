<?php
define('DSN',  "mysql:host=localhost;dbname=library");
define('USERNAME', "root");
define('PASSWORD', "");

$options=array(PDO::ATTR_PERSISTENT => true );
try {
	$conn = new PDO (DSN,USERNAME,PASSWORD,$options);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "connection Succesfully";
} catch ( PDOException $ex ) {
	echo "Error".$ex->getMessage();
}
function var_dump_pre($mixed = null) {
	echo '<pre>';
	var_dump($mixed);
	echo '</pre>';
	return null;
}
?>
