<html>
    <head>
        <title>Greet User</title>
    </head>
    <body>

<?php

/*

*******************Self Processing Pages*******************
~Single php program can be used to both generate a form and process it,using combination of HTML and PHP.
This type of php pages is known as self processing pages.

*/


if(isset($_GET['name1']))
{
   $nm=$_GET['name1'];
   echo"Hello ".$nm;
    
}
else
{
?>



        <form action="7.php" method="GET">
            Name:<input type="text" name="name1" /><br/>
          
            <input type="submit" name="ok"  />
        </form>
        <?php
}
?>
    </body>
</html>
            