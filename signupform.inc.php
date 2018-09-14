<?php
// Start the session
session_start();
?>

<?php
	if(isset($_POST['submit']))
	{
		include 'dbconn.php';
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$uname=mysqli_real_escape_string($conn,$_POST['suname']);
		$pass=mysqli_real_escape_string($conn,$_POST['spass']);
		$type=mysqli_real_escape_string($conn,$_POST['typeofuser']);
		$sql = "INSERT INTO users (email ,username , pass , user_type) VALUES ('$email','$uname' , '$pass' , '$type')";
		mysqli_query($conn, $sql);
		$_SESSION["uname"]=$uname;
		$sql ="SELECT LAST_INSERT_ID()";
		$result=mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['uid']=$row['LAST_INSERT_ID()'];
		if($type=='tasker')
		{
			header('location: postatask.php');
		}else{
			header('location: browse.php');
		}
	}
	else{
		header('location: tasker.php');
		exit();
	}
	
?>