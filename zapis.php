<html>
<head>
<Title>Write Data</Title>
</head>
<body>
<h1>Write Data PHP Works Just Fine !!!</h1>
<img src="pcgif.gif" alt="The official HTML5 Icon"> 
</body>
<html>

<?php
$dbusername="root"; //Name of User
$dbpassword=" "; //This Users Password
$server="localhost"; // Server, localhost in case of Local Web Server
$dbconnect= mysqli_connect($server,$dbusername,$dbpassword); //Connection Parameters 
$dbselect= mysqli_select_db($dbconnect,"arduino"); // Connect to the Database
//SQL insert statement, Passing two Variables, value Humidity and Temperature
$sql="insert into arduino.temp (teplota,vlhkost) values ('".$_GET["teplota"]."','".$_GET["vlhkost"]."')"; 
mysqli_query($dbconnect,$sql); //Execute SQL query
?>