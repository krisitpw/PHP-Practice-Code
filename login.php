<?php
 
$servername = "localhost";
$username="root";
$password="";
$dbname="login";

$conn=new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " . $conn->connect_error);
}
// else
// {
// 	echo "Connected";
// }


if(isset($_POST['loginbutton']))
{
$user = $_POST['username'];
$pass = $_POST['password'];
$query = "SELECT * FROM login where username ='$user' and password ='$pass'";

       if($conn->query($query))
         {
         	echo "Login";
            $_SESSION['username'] = $user;
            header('Location: index.php');
            exit();
         }
         else
         {
         	echo "failed";
         }
      }
      $conn->close();




  

          


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Login</title>
</head>
<body>
	<div class="container d-flex justify-content-center px-4 py-3">
		<form method="POST"  class="form-group text-center ">
			<h2 class="text-center">Admin Login</h2>
			<br>
			<hr>
			<br>

	
				<div class="col">
			<input type="text" name="username" placeholder="Enter UserName" class="form-control" required>
		 </div>
		 <br>
			<div class="col">
			<input type="password" name="password" placeholder="Enter Password" class="form-control" required>
			 </div>
			 <br>
			 <button class="btn btn-success btn-lg text-center" name="loginbutton">Login</button>
			
		</form>
	</div>

</body>
</html>