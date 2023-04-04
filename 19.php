<?php

session_start();
if(isset($_SESSION['user']))
{
    echo sprintf("welcome %s !<br>",$_SESSION['user']);  /* welcome admin ! */
}

if(isset($_SESSION['roles']))
{
    echo sprintf('Your role: %s',implode($_SESSION['roles'])); /*Your role: admin,approver,editor*/
}
?>