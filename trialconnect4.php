<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$link = mysqli_connect("localhost", "root", "","login3");



$query= "SELECT * FROM accounts where username='$username' and password='$password' and status='active'"; //query
$result = mysqli_query($link,$query); //conecction to database and query

//to ensure all forms are filled up
 if(empty($username) or empty($password)){
	echo "Please fill up all forms";
}

//if all forms are filled up
 else{
 $row = mysqli_fetch_array($result);
 if ( $row['username'] == $username && $row['password'] == $password ) {
 	if($row['type'] == 'admin'){
 		$_SESSION['username']=$username;
 		 header("Location: adminpage.php");
  }
  if($row['type'] == 'agent'){
  	$_SESSION['username']=$username;
  header("Location: agentpage.php");
  }
  if($row['type'] == 'superuser'){
  	$_SESSION['username']=$username;
  header("Location: superuserpage.php");
  }
 }
 else {
     echo "Failed to login!";
}
}
?>
