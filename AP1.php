<html>
    <head>
        <title>Programming Languages(Example of Multivalued parameters)</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Select Languages:<br/>
            <Select name="lang[]" multiple>
                <option value="c">C</option>
                <option value="java">JAVA</option>
                <option value="php">PHP</option>
                <option value="c++">C++</option>
                
            </Select><br>
            <input type="submit" name="s" value="Submit" />
        </form>
        <?php
        if(array_key_exists('s',$_GET))
        {
            $lan=join("",$_GET['lang']);
            echo "You have a selected $lan subjects."; 

        }
        ?>
    </body>
</html>