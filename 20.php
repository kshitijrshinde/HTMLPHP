<?php

/*
********Destroy a PHP session************(refer 17.php for result)

~To remove all global session variables and destroy the session,use session_unset(),session_destroy() functions.
~1]session_unset()- used for destroy a single session variable.
~2]session_destroy()-used for destroy all the session variables.(not take any argument ,only nedd to call)

*/



session_start();

session_unset();

session_destroy();
?>