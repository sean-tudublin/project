<?php
if (isset($_POST['insert']))
{
	$host = "localhost";
	$dbname = "login_db";
	$username = "root";
	$password = "";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$connect = mysqli_connect($host, $dbname, $username, $password);
	$query = "INSERT INTO 'users'('name','email','password') VALUES ('$name','$email','$password')";

	$result = mysqli_query($connect,$query);

	if($result)
	{
		echo "Data Inserted";
	}else{
		echo "Data Not Inserted";
	}

	mysqli_free_result($result);
	mysqli_close($connect);
}
?>
