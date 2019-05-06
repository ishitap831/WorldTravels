<?php
extract($_POST);
$host='localhost';
$username='snuthalapati1';
$password='snuthalapati1';
$db_name='snuthalapati1';
$tbl_name='Flights';
$conn = mysqli_connect($host, $username, $password,$db_name);
if (!$conn) {
	echo "failed";
    die("Connection failed: " . mysqli_connect_error());
}
$query = "INSERT INTO Flights VALUES ('$dname','$aname','$airlines','$fnumber','$ttime','$route')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:home.html");
			}
			else{
				
				echo '<script type="text/javascript">alert("Error occured\nTry Again!!"); window.location.href="flights.php";</script>';
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
?>