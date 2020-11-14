<?php
session_start();
if($_GET["mode"]=="dar"){
$_SESSION["sky"] = null;
}elseif($_GET["mode"]=="sky"){
$_SESSION["sky"] = true;
}