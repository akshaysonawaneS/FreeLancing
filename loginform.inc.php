<?php
// Start the session
session_start();
?>

<?php
	if(isset($_POST['submit']))
	{
		include 'dbconn.php';
		$uname=mysqli_real_escape_string($conn,$_POST['uname']);
		$pass=mysqli_real_escape_string($conn,$_POST['pass']);
		$sql = "SELECT * FROM users WHERE username='$uname' AND pass='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$_SESSION["uname"]=$uname;
			$_SESSION["uid"]=$row["user_id"];
			$row = mysqli_fetch_assoc($result);
			if($row['user_type'=='tasker']){
				header('location: postatask.php');
			}else{
				header('location: browse.php');
			}
		
		}
		else{
			echo "username or password is wrong";
		}
	}
	else{
		header('location: tasker.php');
		exit();
	}
	
?>