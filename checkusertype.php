<?php
// Start the session
session_start();
?>

<?php
	include 'dbconn.php';
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$sql = "SELECT * FROM users WHERE username=$uname AND pass=$pass";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
	
	$tol=$_POST['typeofuser'];
	if($tol=='taskgiver')
	{
		header('location: postatask.php');
		
	}else
	{
		header('location: browse.php');
	}
?>