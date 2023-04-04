<?php

/*

*******************Cookies*************************
~A cookie is a small piece of data in the form of a name-value pair that is sent by web server and stored by the browser on the client machine.
~This information is used by the application running on the server side to customize the web page according to the past history
  of transcation from that client machine.
~PHP cookie is small piece of information which is stored at client browser.it is used to recognize the user.
~Cookie is created server side and saved to client browser.

~The setcookie() function defines a cookie to be sent along with the rest of the HTTP headers.

Syntax:

setcookie(name,value,expire,path,domain,secure,httponly)

name: name of the cookie,stored in an environment variable called $_COOKIE.
value: value of the named variable.
expire:UNIX timestamp denoting the time at which the cookie will expire.
path:the specifies the directories for which the cookie is valid. if '/' permits the cookie to be valid for all directories. 
domain:the browser will return the cookie only for URL's within this domain.(optional)
secure:this can be set to 1 specify that the cookie should only be sent by secure transmission using HTTPS
        otherwise set to 0 which mean cookie can be sent by regular HTTP.
*/
?>

 <?php
  $cookie_name="user";
  $cookie_value="cookie example";

  setcookie($cookie_name,$cookie_value,time()+(86400),"/");
 ?>

 <html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie Is not set.";
        }
        else
        {
           echo $_COOKIE[$cookie_name];
        }
       
        ?>
    </body>
 </html>


 
 <?php

 /*
Deleting cookie in php

setcookie($cookie_name,"",time() - (86400),"/");

 */

 ?>
 