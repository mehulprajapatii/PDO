<?php
include_once 'Database.php';

try {
	//prepared the query
	$stmt=$conn->prepare("insert into books set name=:name ,description=:description");
	
	
	//execute the stmt
	$stmt->bindParam(":name", $name);
	$stmt->bindParam(":description", $description);
	
	//1
	$name ="SQL2";
	$description="Strcuture query lang";
	$stmt->execute();
	//2
	$name ="Object and Patterns";
	$description="Software Crafting";
	$stmt->execute();
	//3
	$name ="UML";
	$description="Strcuture query lang";
	$stmt->execute();
	//4
	$name ="SQL1";
	$description="Strcuture query lang";
	$stmt->execute();
} catch (Exception $e) {
	echo "error pls check".$e->getMessage();
}
?>