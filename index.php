
<?php

if(isset($_POST['post'])){
$user_name = "root";
$password = "";
$database = "lion";
$server = "localhost";
$db_handle = mysqli_connect($server, $user_name, $password,$database );


if ($db_handle) {
$SQL = "SELECT * FROM biodata ";
$result = mysqli_query($db_handle,$SQL);
$count = mysqli_num_rows($result);
if ($count > 0 ){
	while ($biodata = mysqli_fetch_assoc($result)){
		print_r($biodata);
		
	}
}

}
else {
print "shii happens";

}

}

?>
<html>
<head>
	<title>
		firstcommit
	</title>
</head>
<body>
	<form action="index.php" method="post">
	  <button class="btn btn-lg btn-primary btn-block" type="submit" name='post'>click the button</button>
	  </form>
	</body>
</html>