<?php
/*

********Automatic Quoting of Parametrs*********

1)addslashes() function returns a string with backslashes in front of predefined characters.
2)stripslashes() function removes backslashes added by the addslashes() function.

*/


$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";
echo addslashes($str) . " This is safe in a database query.";

?>

