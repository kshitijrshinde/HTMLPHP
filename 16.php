<?php
/*
 ********** SESSIONS IN PHP **********

~A session can be defined as "a series of related interactions between a single client and the web server,which takes place over a period
  of time.
~PHP session is used to store and pass information from one page to another temporarily(until user close the website).
~PHP session_start() function is used to start the session.It start a new or resume exisiting session.
~syntax: bool session_start()
~$SESSION is an associative array that contains all session variables.it is used to set and get session variable values.
*/
?>
 

 <?php
  session_start();

  if(isset($_SESSION['counter']))
  {
    $_SESSION['counter']+=1;

  }
  else
  {
    $_SESSION['counter']=1;
  }
 $msg="You have visited this page ". $_SESSION['counter']. " in this session";


 ?>

 <html>
    <head>
        <title>
            Setting Up a PHP session
        </title>
    </head>
        <body>
            <?php
            echo($msg);
            
            ?>
        </body>
 </html>
