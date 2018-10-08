<?php
session_start();
if(empty($_SESSION['error'])){
	$_SESSION['error']="none";
}

include 'dbconn.php'; 
?>




<!DOCTYPE html>
<html>
<head>
	<title>Tasker</title>
	<link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="frontpage.css">
    <!-- <link rel="stylesheet" type="text/" href=""> -->
<script type="text/javascript" href="custom.js"></script>
</head>
<body class="backimage">
<nav class="navbar navbar-expand-sm navbar-dark bg-info">
  <a class="navbar-brand" style="margin-right: 30px; margin-left:30px" href="#"><font face="Lucida Calligraphy">Tasker</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="postatask.php">Post a Task</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="browse.php?card=0">Browse Tasks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="howitworks.html">How it works</a>
      </li>
    </ul>
	<?php
	if(empty($_SESSION['uname']))
	{
		 echo " <button type='button' id='loginindex' class='btn btn-light' data-toggle='modal' data-target='#exampleModalCenter1'>Log in</button>";
		 echo "<button type='button' class='btn btn-light' data-toggle='modal' data-target='#exampleModalCenter2'><span class='glyphicon glyphicon-user'></span> Sign up </button>";
		
	}
	else
    {
		
		
      echo "<p class='username'>Welcome, ".$_SESSION['uname']."</p>";
      echo '<form action="logout.inc.php" method="post"><button type="submit" name="logout" class="btn btn-light" style="margin-left:8px;">Log out</button></form>';
    }
	?>
   
  </div>

<?php
	include 'loginform.php';
?>

<?php
	include 'signupform.php';
?>

<?php
	    	$error = $_SESSION['error'];	
?>

<script type='text/javascript'>
	
	var error = '<?php echo $error; ?>';
	if (error == 'wrong_pass'){
		$(document).ready(function() 
			{ 
				$('#loginindex').click(); 
			});
	}
</script>


</nav>
<div class="card-container">
	<a href="browse.php?card=1" >
		<div class="card" id="web" style="width: 18rem;text-decoration:none">
	    <div class="card-body">
	    <h5 class="card-title">Web Development</h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
		</div>
	</a>
	<a href="browse.php?card=2" >
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
			<h5 class="card-title">Android App Development</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</a>
	<a href="browse.php?card=3" >
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
			<h5 class="card-title">Software Development</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</a>
	<a href="browse.php?card=4" >
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
			<h5 class="card-title">Database Solutions</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</a>
	<a href="browse.php?card=5" >
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
			<h5 class="card-title">Software Testing</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</a>
	<a href="browse.php?card=6" >
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
			<h5 class="card-title">Cloud Computing</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</a>
</div>


</body>
</html>
