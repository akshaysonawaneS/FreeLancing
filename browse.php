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
        <a class="nav-link" href="#">How it works</a>
      </li>
    </ul>
  <?php
    if(!empty($_SESSION['uname']))
    {
      echo "<p class='username'>Welcome, ".$_SESSION['uname']."</p>";
      echo '<form action="logout.inc.php" method="post"><button type="submit" name="logout" class="btn btn-light" style="margin-left:8px;">Log out</button></form>';
    }
  ?>

  </div>
  
</nav>

<div class="sidebarcontainer">
  <div class="sideBar" name="sideBarb">
    <div class="btn-group-vertical">
  <button type="button" class="btn btn-light">Web Development</button>
  <button type="button" class="btn btn-light">Android App Development</button>
  <button type="button" class="btn btn-light">Software development</button>
  <button type="button" class="btn btn-light">Database Solutions</button>
  <button type="button" class="btn btn-light">Software Testing</button>
  <button type="button" class="btn btn-light">Cloud Computing</button>

</div>
  </div>
</div>
<?php
	include 'dbconn.php';
	$uname=$_SESSION["uname"];
	$id=$_SESSION["uid"];
	$count=1;
	$sql = "SELECT * FROM tasks";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		echo "<div class='jobs' id='".$count."' onclick='theFunction(event)' >";
		echo "<h3> TITLE - ".$row["title"]."</h3>";
		echo "<p> DESCRIPTION - ".$row["description"]."</p>";
		echo "</div>";
		$count=$count+1;
	}
	
?>
<script>
	function theFunction(e)	
	{ 
		alert(e.target.id);
	}
</script>
</body>
</html>
