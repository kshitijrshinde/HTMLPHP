<?php

echo"<br>ROLL No: ".$_COOKIE["rollno"];
echo"<br>NAME: ".$_COOKIE["name"];
echo"<br>CLASS: ".$_COOKIE["class"];

echo"<br><br>";

echo"<table border=1> <tr> <th> SUBJECT <th> MARKS </tr>";
echo "<tr> <td> OS <td>".$_POST["os"]."</tr>";
echo "<tr> <td> JAVA <td>".$_POST["java"]."</tr>";
echo "<tr> <td> PYTHON <td>".$_POST["python"]."</tr>";
echo "<tr> <td> PHP <td>".$_POST["php"]."</tr>";

echo"<br>";
echo"<br><br>";

$total=$_POST["os"]+$_POST["java"]+$_POST["python"]+$_POST["php"];
$per=$total/4;
echo"<br>TOTAL: ".$total;
echo"<br>PERCENTAGE: ".$per;
echo"<br><br>";




?>