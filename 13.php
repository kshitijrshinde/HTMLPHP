<?php
/*
*******************Validating Forms*******************
~when user inputs data in a form it should be validated before storing it.
~There are two ways to validate data, client side and server side validation.
~for client side validation JavaScript is used.
~php is used for server side validation.(secure way).

*/
?>

<html>
    <head>
        <title>Validating Form</title>
    </head>
    <body>
        <form name="form1" method="POST" action="13.php">
            Your Name (Required):
            <input type="text" name="name" >
            <br>
            UserName (atleast 5 characters):
            <input name="username" type="text">
            <br>
            <input name="send" type="submit" value="Submit">
        </form>
    </body>
</html>

<?php

if(isset($_POST['send']))
{
    if(!empty($_POST['name']))
    {
        echo"Name: ".$_POST['name']."<br />";
    }
    else
    {
        echo"Name is missing...";
        echo"<br />";
    }

    if(!empty($_POST['username']))
    {
        if(strlen($_POST['username']) < 5 )
        {
            echo"Username must be atleast 5 characters long...";
            echo"<br />";
        }
        else
        {
            echo"User Name: ". $_POST['username'];

        }
    }
    else
    {
        echo "UserName is missing...";
        echo"<br />";
    }
    
}

size
?>