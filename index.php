<?php
ob_start();
session_start();
$error="";
if (isset($_POST['sub'])){
	$un=$_POST['un'];
	$pwd=$_POST['pwd'];
	
	$_SESSION['logged_in']=time() * rand('00','99');
	$_SESSION['un']=$un;
	$_SESSION['pwd']=$pwd;

include 'include/log.inc.php';



}

?>
<! DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="style/reset.css"> 

<title>Home</title>
<style>
  <?php
	include ("style/header.php");
	include "style/footer.php" ;

	?>
</style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<div class="logo">
		<a href="index.php"><img src="image/logo.png" height="80px" width="" alt="logo"></a>
	</div>
				<form class="navbar-form navbar-right" method="POST" action="include/search.php" role="search">
        <div class="form-group">
          <input class="form-control" name="ser" placeholder="Search" type="text">
        </div>
        <button type="Search" name="ent" class="btn btn-default">Search</button>
      </form>
	  <?php
	  if(isset($_POST['ent'])){
		  $ser=$_POST['ser'];
		  
		  
	  }
	  
	  
	  ?>
      
</div>
</div>
</nav>
<div class="container">
 <div class="row">
	<div class="col-sm-4">
		<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="#">My workspace</a></li>
			  <li class="dropdown">
				<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="index.php?login">
				  Grade books
				</a>
			  </li>
			  <li class="dropdown">
				<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="index.php?login">
				  Groups
				</a>
			  </li>
			  <li class="dropdown">
				<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="index.php?login">
				  My unreads
				</a>
			  </li>
			  <li class="dropdown">
				<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="index.php?login">
				  My account
				</a>
			  </li>
			  <li class="dropdown">
				<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="index.php?login">
				  Create content
				</a>
			  </li>
		</ul>
		</div>
		<div class="col-sm-1">
		
		</div>
		<div class="col-sm-7">
		
			<ul class="breadcrumb">
				<li><h1>Please Login</h1></li>
			</ul>
			
			<form class="navbar-form form-group-lg" method="POST">
        <div class="form-group">
          <input class="form-control" placeholder="enter username" name="un" type="text">&nbsp;&nbsp;<?php echo $error; ?>
        </div><br><br>
		<div class="form-group">
          <input class="form-control" placeholder="enter password" name="pwd" type="password">&nbsp;&nbsp;<?php echo $error; ?>
        </div><br><br>
         <button type="submit" name="sub" class="btn btn-default">Login</button>
      </form>
			</div>
	</div>
	
</div>
<div class="footer">
	<p><a href="#">Multi-user Blogging </a>&copy;  <?php echo date("Y");?> copyright</p>
</div>

</body>
</html>