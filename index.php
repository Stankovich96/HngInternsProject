<?php
include 'C:\xampp\htdocs\uchenna\connection.php';

$query ='SELECT * FROM people';

$result = mysql_query($query); 

  while($person = mysql_fetch_array($result)){
  	echo "<h3>". $person['Name']  . "</h3>";
  	hiii;
}

