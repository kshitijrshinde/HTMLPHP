<?php

/*

*******************Multivalued Parametrs*******************
~The html selection lists can allow multiple selections,when name of the field in the html form end with [] and the 'multiple'
attribute is used.
?>
*/
?>

<html>
    <head>
        <title>Programming Languages</title>
    </head>
    <body>
        <form action="9.php" method="GET">
            <Select name="lang[]" multiple>
                <option value="c">C</option>
                <option value="java">JAVA</option>
                <option value="php">PHP</option>
                <option value="c++">C++</option>
                
            </Select><br>
            <input type="submit" name="submit" value="OK" />
        </form>
        <?php
        if(isset($_GET['submit']))
        {
            $lan=$_GET['lang'];
            echo "You selected<br>";
            foreach($lan as $k=>$v)
            echo "$v ";

        }
        ?>
    </body>
</html>