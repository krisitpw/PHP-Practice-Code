<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Return the Length of a String- strlen() </h2>
		<p>This software help to find the total length of the words in a string(means words or sentences).</p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control" rows="4" cols="50"></textarea>
</div>
	<br>
	<input  type="submit" name="strlen" value="Result" class="btn btn-success" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strlen']))
{
	$x=$_POST['num1'];
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Length of Word is : " . strlen($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>
<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Count Words in a String- str_word_count() </h2>
		<p>This software help to counts the number of words in a string(means words or sentences).</p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control" rows="4" cols="50"></textarea>
</div>
	<br>
	<input  type="submit" name="str_word_count" value="Result" class="btn btn-info" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['str_word_count']))
{
	$x=$_POST['num1'];
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Count of Word is : " . str_word_count($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>

<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Reverse a String- strrev() </h2>
		<p>This software help to reverse the words in a string(means words or sentences).</p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control" rows="4" cols="50"></textarea>
</div>
	<br>
	<input  type="submit" name="strrev" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strrev']))
{
	$x=$_POST['num1'];
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Reverse of Word is : " . strrev($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>

<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Search For a Text Within a String - strpos() </h2>
		<p>This software help to searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-6">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
<div class="col-md-6">	
	<textarea  name="num2" value="" placeholder="Enter Text want to find position" required class="form-control"></textarea >
</div>
</div>
</div>
	<br>
	<input  type="submit" name="strpos" value="Result" class="btn btn-darkza" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strpos']))
{
	$x=$_POST['num1'];
	$y=$_POST['num2'];
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Position of Word is : " . strpos($x, $y) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>

<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Replace Text Within a String - str_replace() </h2>
		<p>This software help to replaces some characters with some other characters in a string (means words or sentences).</p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-6">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
<div class="col-md-6">	
	<textarea  name="num2" value="" placeholder="Enter Text want to find position" required class="form-control"></textarea >
</div>
</div>
</div>
	<br>
	<input  type="submit" name="str_replace" value="Result" class="btn btn-warning" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['str_replace']))
{
	$x=$_POST['num1'];
	$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Replace of Word is : " . str_replace($x, $y, $x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>
<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert Text to uppercase - ucfirst()</h2>
		<p>This software help to Convert the first character of "hello" (means words or sentences) to uppercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="ucfirst" value="Result" class="btn btn-success" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['ucfirst']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . ucfirst($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>
<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert Text to lowercase - lcfirst()</h2>
		<p>This software help to Convert the first character of "hello" (means words or sentences) to lowercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="lcfirst" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['lcfirst']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . lcfirst($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>

<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert first character of each word to uppercase - ucwords()</h2>
		<p>This software help to Convert the first character of each word in a string to uppercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="ucwords" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['ucwords']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . ucwords($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>

<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert a string to uppercase - strtoupper()</h2>
		<p>This software help to Convert a string to uppercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="strtoupper" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strtoupper']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . strtoupper($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>
<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert a string to lowercase - strtolower()</h2>
		<p>This software help to Convert a string to lowercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="strtolower" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strtolower']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . strtolower($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>
<hr>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Functions - PHP</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<h2>Convert a string to lowercase - strtolower()</h2>
		<p>This software help to Convert a string to lowercase </p>
		<br>
	<form method="post" action="PHPStringFunctions.php">
		<div class="form-group">
		<div class="row">
		<div class="col-md-12">	
	<textarea  name="num1" value="" placeholder="Enter Text Here...." required class="form-control"></textarea>
</div>
</div>
</div>
	<br>
	<input  type="submit" name="strtolower" value="Result" class="btn btn-danger" > &nbsp; &nbsp;
	
	<?php
	if(isset($_POST['strtolower']))
{
	$x=$_POST['num1'];
	//$y=$_POST['num2'];
	//$z= echo " $x , " " , $y ";
	echo "<br>";
echo "<br>";
echo "<p><strong>Input Text is :</strong> " . $x . "</p>";
echo "<br>";
echo "<h2>Your Result is : " . strtolower($x) . "</h2>" ;

}

	?>
</form>
</div>
</body>
</html>