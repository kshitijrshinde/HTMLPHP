<?php

/*

*******************Sticky Forms*******************
~In sticky forms the values entered by user remain displayed with form component,if we display the form after submit.
*/
?>

<html>
    <head>
        <title>Greet User</title>
    </head>
    <body>

    <form action="8.php" method="GET">
            Name:<input type="text" name="name1" value="<?php echo $_GET['name1'];?>"/> <br/>
          
            <input type="submit" name="ok"  />
        </form>
       

<?php

if(isset($_GET['name1']))
{
   $nm=$_GET['name1'];
   echo"Hello ".$nm;
    
}
?>
    </body>
</html>

            