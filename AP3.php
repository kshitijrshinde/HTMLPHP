<?php
/* Program to accept two strings and ckeck if strings are equal using sticky form. */
?>


<html>
    <head>
        <title>STRING COMPARISION</title>
    </head>
    <body>

        <?php
        $s1=@$_GET['str1'];
        $s2=@$_GET['str2'];
        ?>

        <form action="AP3.php" method="GET">
            String1:
            <input type="text" name="str1" value="<?php echo $s1?>" />  
            <br/>
            String2:
            <input type="text" name="str2" value="<?php echo $s2?>" />
            <br/>
            <input type="submit" name="Check Equality" />
        </form>

        <?php

        if(! is_null($s1) && ! is_null($s2))
        {
            if(strcmp($s1,$s2)==0)
            {
                echo"Strings are equals";
            }
            else
            {
                echo"Strings are not equals";
            }
            
        }

        ?>
            
    </body>
</html>