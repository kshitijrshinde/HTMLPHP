<?php
setcookie('rollno',$_POST['rollno']);
setcookie('name',$_POST['name']);
setcookie('class',$_POST['class']);
?>

<html>
    <form action="AP2a.php" method="POST">
        <br>
        Enter the marks: <br><br>
        OS: <input type="text" name="os" size=3>
        <br><br>
        JAVA:  <input type="text" name="java" size=3>
        <br><br>
        PYTHON:  <input type="text" name="python" size=3>
        <br><br>
        PHP:  <input type="text" name="php" size=3>
        <br><br>

        <input type="submit" name="submit" value=submit>
    </form>
    </html>
        