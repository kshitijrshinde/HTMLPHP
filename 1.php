<?php
/*
Cookies:

A cookie is a small file that the server embeds on the user's computer to identify him next time whenever we visit the website.

setcookie ( name , value ,expiration time , path = "");

Now name and value arguments are self-explanatory, the expiration time is when the cookie will expire 
[e.g., for 1 day, we will use 86400 seconds], and for path, we can use "/" to use it everywhere on the site. Now, let's create a cookie:
*/
echo"Welcome to the world of cookies...";

setcookie("category","Books",time()+86400,"/");
?>
