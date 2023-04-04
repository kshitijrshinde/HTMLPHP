<?php
/*

*******************GET Method*******************

~GET is used to request data from a specified resource.
~The GET method sends the encoded user information appended to the page request(to the URL).
~restriction on data size, send upto 1024 characters only.
~not send ASCII as well as binary data.
~Information sent with GET method is visible to everyone(all variables names and values are displayed in the URL).




*/

if(isset($_GET['s1']))
{
    echo"Welcome ".$_GET['name']."</br>";
    echo"You are ".$_GET['age']."years old";
    
}
?>

<html>
    <body>
        <form action="4.php" method="GET">
            Name:<input type="text" name="name" /><br>
            Age:<input type="text" name="age" /><br>
            <input type="submit" name="s1" value="ok" />
        </form>
    </body>
</html>
            