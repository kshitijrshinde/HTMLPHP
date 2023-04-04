<html>
    <head>
        <title>Programming Languages</title>
    </head>
    <body>
        <form action="10.php" method="GET">
         Select Programming Languages: <br />
         <input type="checkbox" name="lang[]" value="c">C
         <input type="checkbox" name="lang[]" value="java">JAVA
         <input type="checkbox" name="lang[]" value="c++">C++
         <input type="checkbox" name="lang[]" value="c#">C#
            <br>
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