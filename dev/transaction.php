<?php
include_once 'Database.php';

$sql=$conn->query("SHOW TABLE STATUS FROM library");
var_dump_pre($sql->fetch());
?>