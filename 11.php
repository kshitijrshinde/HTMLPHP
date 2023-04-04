<html>
    <head>
        <title>Question Survey</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        Have you ever eaten pizza before?
        <input type="checkbox" name="ch1" value="Pizza" <?php if(isset($_GET['ch1']) and isset($_GET['s'])) echo"checked";?>><br />
        Have you ever eaten burger before?
        <input type="checkbox" name="ch2" value="Burger" <?php if(isset($_GET['ch2']) and isset($_GET['s'])) echo"checked";?>><br />
        <br>
        <input type="submit" name="s" value="ok" />
        </form>

        <?php
        if(isset($_GET['s']))
        {
            echo"You have eaten: ";
            if(isset($_GET['ch1'])) echo"$_GET[ch1] ";
            if(isset($_GET['ch2'])) echo"$_GET[ch2] ";
       
            
        }

        ?>
        
    </body>
</html>