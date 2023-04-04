<?php
/*

*******************POST Method*******************

~POST method transfer the information via HTTP headers,not through the URL.
~not restriction on data size to be sent.
~send ASCII as well as binary data.
~Information sent with POST method is not visible.(variables names and values are not displayed in the URL).


*/

if(isset($_POST['s1']))
{
    echo"Welcome ".$_POST['name']."</br>";
    echo"You are ".$_POST['age']."years old";
    
}
?>

<html>
    <body>
        <form action="5.php" method="POST">
            Name:<input type="text" name="name" /><br>
            Age:<input type="text" name="age" /><br>
            <input type="submit" name="s1" value="ok" />
        </form>
    </body>
</html>
            