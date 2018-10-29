<?php
session_start();
$sid = session_id();
$_SESSION['name']='kodama';
$_SESSION['age']='48';
echo $sid;
?>
