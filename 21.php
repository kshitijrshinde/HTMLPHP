<?php
/*
*****************PHP ERROR HANDLING****************** set_error_handler()

~Error handling is the process of catching errors raised by our pprogram and taking appropriate action.
~In php we can define our own error handler function to handle the error.

~set_error_handler function sets a user-defined error handler function.
*/


function on_error($num,$str,$file,$line)
{
    print("Encountered error $num in $file, line $line: $str\n");
}

set_error_handler("on_error");
print($a);

/*Encountered error 2 in /opt/lampp/htdocs/myapp/Programs/1.Introduction to web techniques/21.php, line 18: Undefined variable $a*/
?>

<?php
/*
***************Trigger an Error***************** trigger_error()
~In script where users can input data it is useful to trigger errors when an illegal input occurs.
In php this is done by the trigger_error() function.
*/


$test=2;

if($test<1)
{
    trigger_error("Value must be 1 or below");
}
?>

<?php
/* error_log() */
?>