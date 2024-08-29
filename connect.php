<?php
$host="localhost";
$dbuser="root";
$pwd="";
$dname="election";

$conn= mysqli_connect($host,$dbuser,$pwd,$dname);
if (!$conn) {
	echo "not able to connect due to some technical issue";
}
$uname = $_POST['username'];
$rno = $_POST['rollnumber'];

try {
$query = "INSERT INTO `voters`(`username`, `regno`) VALUES ('$uname','$rno')";
$result = mysqli_query($conn,$query);
if ($result) {
	header('Location: votingpoll.html');
}
if (mysqli_errno()==1062) {
	// code...
}
	
 } catch (Exception $e) {
	echo '<script>alert("your voting is already done!!!   or   any unexpected error has been occured");</script>';
 }
?>