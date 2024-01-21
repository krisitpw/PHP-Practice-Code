<?php 
   session_start();
   include 'login.php';
   if(isset($_SESSION['username']))
   {
      //echo  $_SESSION['username'];
      
      // block of code, to process further...
   }
   else
   {
      header('Location: login.php');
      exit();
   }
   
   // block of code, to process further...
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.dropbtn
{
   color: #fff;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: red;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style> 
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">HTML</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">CSS</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Javascript</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">PHP</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Core Python</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Advance Python</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">My SQL</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Bootstrap</a>
    </li>
    <li class="nav-item">
 <div class="dropdown text-justify">
    <a class="dropbtn nav-link active text-right text-capitalize">Welcome <?php echo  $_SESSION['username']; ?> </a>
    <div class="dropdown-content">
      <a class="nav-link active text-justify" href="login.php"><strong>Logout</strong></a>
     
    </div>
     
  </div> 
    </li>
  </ul>
</nav>
</body>
</html> -->
<!------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar with Logo Image</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="/examples/images/logo.svg" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                          <a class="nav-link" href="#">HTML</a>
                          <a class="nav-link" href="#">CSS</a>
                          <a class="nav-link" href="#">Javascript</a>
                     <a class="nav-link" href="#">PHP</a>
                     <a class="nav-link" href="#">Core Python</a>
                    <a class="nav-link" href="#">Advance Python</a>
                   <a class="nav-link" href="#">My SQL</a>
                    <a class="nav-link" href="#">Bootstrap</a>
                </div>
                <div class="navbar-nav ms-auto">
                <div class="dropdown text-justify">
    <a class="dropbtn nav-link active text-right text-capitalize">Welcome <?php echo  $_SESSION['username']; ?> </a>
    <div class="dropdown-content">
      <a class="nav-link active text-justify" href="login.php"><strong>Logout</strong></a>
     
    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
