<?php
$db = new sqlite3("./cons.db");
$log = str_replace("___"," ",$_GET["in"]);
$log = str_replace("_1_","[",$log);
$log = str_replace("_2_","]",$log);
$log = str_replace("__"," ",$_GET["in"]);
$sql = 'insert into E'.$_GET["id"].'(log) values("'.$log.'");';
$db->query($sql);
echo 'SEROK';
echo $sql;