<?php
$Sum=0;
if(isset($_POST['sum']))
{
	$a=$_GET['num1'];
    $b=$_GET['num2'];
    for($i=0; $i<$Sum; $i++)
    {
    	$Sum=$a + $b;
    }
	
}
    
    


if(isset($_POST['minus']))
{
	$a=$_POST['num1'];
    $b=$_POST['num2'];
    $Sum=$a - $b;
   
}

if(isset($_POST['multi']))
{
	$a=$_POST['num1'];
    $b=$_POST['num2'];
    $Sum=$a * $b;
    
}
if(isset($_POST['division']))
{
	$a=$_POST['num1'];
    $b=$_POST['num2'];
    $Sum=$a / $b;
 
}

if(isset($_POST['modulas']))
{
	$a=$_POST['num1'];
    $b=$_POST['num2'];
    $Sum=$a % $b;
  
}
// if(isset($_POST['reset']=='Reset'))
// {
//   $_POST = array();
// }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>PHP Calculator</h2>
		<br>
	<form method="post" action="calculatorforloop.php">
		<div class="form-group">
		<div class="row">
			<div class="col-md-6">
		
	<input type="text" name="num1" value="" placeholder="enter number 1" required class="form-control">
</div>
<div class="col-md-6">
	<input type="text" name="num2" value="" placeholder="enter number 2" required class="form-control">
	</div>
</div>
</div>
	<br>
	<input  type="submit" name="sum" value="+" class="btn btn-success" style="width: 50px; height: 50px;"> &nbsp; &nbsp;
	<input  type="submit" name="minus" value="-" class="btn btn-danger" style="width: 50px; height: 50px; "> &nbsp; &nbsp;
	<input  type="submit" name="multi" value="*" class="btn btn-warning" style="width: 50px; height: 50px;"> &nbsp; &nbsp;
	<input  type="submit" name="division" value="/" class="btn btn-info" style="width: 50px; height: 50px; "> &nbsp; &nbsp;
	<input  type="submit" name="modulas" value="%" class="btn btn-dark" style="width: 50px; height: 50px; "> &nbsp; &nbsp;
	
	
	<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2> Result Here ="  . $Sum . "</h2>"  ;


	?>
</form>
<!-- <input  type="submit" name="reset" value="Reset" class="btn btn-secondary" > &nbsp; &nbsp;-->
</div>
</body>
</html>