<?php
session_start();
if($_SESSION["user"]){
if($_SESSION["id"]){
$db = new sqlite3("./cons.db");
$sql = 'select * from E'.$_SESSION["id"].' order by id desc;';

$res = $db->query($sql);
$i = 1;
while ($row = $res->fetchArray()) {
$next = '<span id="A'.$i.'">'.$row["log"].'<br></span>'.$next;
$i++;
if($i>49){

break;
}
}
$next = str_replace("_1_","[",$next);
$next = str_replace("_2_","]",$next);
echo $next;

}
}