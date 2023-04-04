<?php
/*
*******************Setting Responce Headers *******************

header()-This function sends a raw HTTP header to a client.

~To send the browser to a new URL, known as a redirection ,
we set the Location header:
<?php
header("location:http://www.example.com/elsewhere.html");
?>

*/
?>

<html>
    <header>
        <title>Setting Responce Headers</title>
    </header>
    <body>
        <form>
            <input type="submit" name="btnpage1" value="page1">
            <input type="submit" name="btnpage2" value="page2">
            <input type="submit" name="btnpage3" value="page3">
        </form>
    </body>
</html>

<?php
if(isset($_GET['btnpage1']))
{
    header("location:page1.php");
}
elseif (isset($_GET['btnpage2']))
{
    header("location:page2.php");
}
elseif (isset($_GET['btnpage3']))
{
    header("location:page3.php");
}
?>