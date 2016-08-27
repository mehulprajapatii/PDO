# PDO
PDO -CRUD Operation with ajax,php,mysql


Introduction :

The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. 
-php manaul.


Error Handling with PDO:
http://php.net/manual/en/pdo.error-handling.php


Connection Using PDO:
Example #1 Create a PDO instance via driver invocation
<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>

Security:

Advance PDO Features”
 

 


Transactions:
Need php version 5.7 =>
And storage engine required is ’ innodb’

I used PDO,php 7,mysqlDB,bootstrap,

Additional Refernce
https://phpdelusions.net/pdo

Code on github:
https://github.com/mehulprajapatii/PDO






