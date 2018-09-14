<!DOCTYPE html>
<html>
<head>
  <title>Tasker</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="frontpage.css">
  
  <link rel="stylesheet" type="text/css" href="custom1.css">

  <script type="text/javascript" href="custom.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

</head>
<body class="backimage">
<nav class="navbar navbar-expand-sm navbar-dark bg-info">
  <a class="navbar-brand" style="margin-right: 30px; margin-left:30px" href="#"><font face="Lucida Calligraphy">Tasker</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="tasker.php?date.code">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="postatask.php">Post a Task</a>
      </li>
       <li class="nav-item">
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
		}
	?>

  </div>
  
</nav>

	<div class="post1">
		<form>
			<h5>TITLE</h5>
			<input type="text" name="title">
			<h5>DESCRIPTION</h5>
			<textarea rows="9 " cols="70" style="padding: 13px"></textarea>
		</form>
	</div>

<h5 style="margin-top: 50px; margin-bottom: 20px;">TASKERS</h5>
<input type="number" name="" style="width: 300px;">
  

  <div> 
	  <label><h4 style="margin-bottom: 10px; margin-top:25px;">Category</h4> 
	  <input list="cat" name="myCategory" /></label>
	  <datalist id="cat"> <option value="Web Development"> <option value="Android App Devlopment"> <option value="Software Development"> 
		  <option value="Database Solution">
		  <option value="Software Testing"> 
		  <option value="Cloud Computinge"> 
	  </datalist>
  </div>

  <button class="btn btn-info" style="width: 100px; margin-left: 400px; border-radius: 9px; margin-top:230px; height:45px" name="post">POST</button>

</body>
</html>