<?php
global $conn;
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "library";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 


 $conn -> close();
 
   
?>