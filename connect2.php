<?php

$vote = $_POST['ref'];
$host="localhost";
$dbuser="root";
$pwd="";
$dname="election";

$conn= mysqli_connect($host,$dbuser,$pwd,$dname);
if (!$conn) {
	echo "not able to connect due to some technical issue";
}
$query = "INSERT INTO `voted_list`(`voted`) VALUES ('$vote')";
$result = mysqli_query($conn,$query);
if ($result) {
	header('Location: returningpage.html');
}


?>
