<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tasker</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="frontpage.css">
  
  <link rel="stylesheet" type="text/css" href="custom1.css">

  <script type="text/javascript" href="custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

</head>
<body class="backimage">
<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-info">
  <a class="navbar-brand" style="margin-right: 30px; margin-left:30px" href="#"><font face="Lucida Calligraphy">Tasker</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="postatask.php">Post a Task</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="browse.php">Browse Tasks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="howitworks.html">How it works</a>
      </li>
    </ul>
	
  <?php
    if(empty($_SESSION['uname']))
	{
		 echo '<button type="button" id="loginindex" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter1"> Log in </button>';
		 $_SESSION["uname"]='guest';
		$_SESSION["uid"]='default';
		$_SESSION['error']='none';
		 $down=1;
	}
	else
    {
		$down=0;
		
		
      echo "<p class='username'>Welcome, ".$_SESSION['uname']."</p>";
      echo '<form action="logout.inc.php" method="post"><button type="submit" name="logout" class="btn btn-light" style="margin-left:8px;">Log out</button></form>';
    }
  ?>
  <?php
	include 'loginform.php';
	?>


  </div>
  <script>
	var down = '<?php echo $down; ?>';
	if (down == 1){
		$(document).ready(function() 
			{ 
				$('#loginindex').click(); 
			});
	}
  </script>
  
</nav>
  <div>
    <div class="sidenav">
      <a href="#about">Web Development</a>
      <a href="#services">Android App Development</a>
      <a href="#clients">Software Devlopment</a>
      <a href="#contact">Database Solution</a>
      <a href="#contact">Software Testing</a>
      <a href="#contact">Cloud Computing</a>
    </div>

    <?php
    	include 'dbconn.php';
    	if($uname=$_SESSION["uname"])
      {
    	$id=$_SESSION["uid"];
    	$sql = "SELECT * FROM tasks";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);
    	}
    ?>


</div>
 <div>
<?php
	include 'dbconn.php';
<<<<<<< HEAD
	
  if(!empty($_SESSION['uname']))
  {
    $uname=$_SESSION["uname"];
    $id=$_SESSION["uid"];  
  }
	$count=1;
=======
	$uname=$_SESSION["uname"];
	$id=$_SESSION["uid"];
>>>>>>> 24d77ded2f8264e772598d5ac7db467586535718
	$sql = "SELECT * FROM tasks";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		echo "<div class='jobs' >";
		echo "<h3> TITLE - ".$row["title"]."</h3>";
		echo "<p> DESCRIPTION - ".$row["description"]."</p>";
		echo "</div>";
	}
	
?>
</div>
</body>
</html>
