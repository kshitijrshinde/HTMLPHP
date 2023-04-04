<?php
session_start();
$_SESSION['user']="admin";
$roles=array("admin","approver","editor");
$_SESSION['roles']=$roles;
session_write_close();
?>