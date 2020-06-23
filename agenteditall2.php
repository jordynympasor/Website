<?php 
session_start();
$username2=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$age=$_POST['age'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$sex=$_POST['sex'];
$religion=$_POST['religion'];
$nationality=$_POST['nationality'];
$hlurb=$_POST['hlurb'];
$prc=$_POST['prc'];
$valid=$_POST['valid'];
$pwork=$_POST['pwork'];
$yearstay=$_POST['yearstay'];
$position=$_POST['position'];
$eschool=$_POST['eschool'];
$eyear=$_POST['eyear'];
$hschool=$_POST['hschool'];
$hyear=$_POST['hyear'];
$cschool=$_POST['cschool'];
$cyear=$_POST['cyear'];
$team=$_POST['team'];
$tlname=$_POST['tlname'];
$ctlname=$_POST['ctlname'];
$type2=$_POST['optionsRadios'];
$birth=$_POST['birth'];
$username=$_SESSION['username'];
$link = mysqli_connect("localhost", "root", "","login3");
	
	if (!empty($username2)) {
		$query= "update accounts set username2='$username2' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($password)) {
		$query= "update accounts set password='$password' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($fname)) {
		$query= "update accounts set fname='$fname' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
		}
	if (!empty($sname)) {
		$query= "update accounts set sname='$sname' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($mname)) {
		$query= "update accounts set mname='$mname' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($age)) {
		$query= "update accounts set age='$age' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
		}
	if (!empty($email)) {
		$query= "update accounts set email='$email' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
		}
	if (!empty($phone)) {
		$query= "update accounts set contact='$phone' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
		}
	if (!empty($birthday)) {
		$query= "update accounts set birthday='$birthday' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
		}
	if (!empty($address)) {
		$query= "update accounts set address='$address' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($sex)) {
		$query= "update accounts set sex='$sex' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($religion)) {
		$query= "update accounts set religion='$religion' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($nationality)) {
		$query= "update accounts set nationality='$nationality' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($hlurb)) {
		$query= "update accounts set hlurb='$hlurb' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($prc)) {
		$query= "update accounts set prc='$prc' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($valid)) {
		$query= "update accounts set valid='$valid' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($pwork)) {
		$query= "update accounts set pwork='$pwork' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($yearstay)) {
		$query= "update accounts set yearstay='$yearstay' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($position)) {
		$query= "update accounts set position='$position' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($eschool)) {
		$query= "update accounts set eschool='$eschool' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($eyear)) {
		$query= "update accounts set eyear='$eyear' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($hschool)) {
		$query= "update accounts set hschool='$hschool' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($hyear)) {
		$query= "update accounts set hyear='$hyear' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($cschool)) {
		$query= "update accounts set cschool='$cschool' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($cyear)) {
		$query= "update accounts set cyear='$cyear' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if ($team!="") {
			
		$query= "update accounts set team='$team' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	
	}
	if (!empty($tlname)) {
		$query= "update accounts set tlname='$tlname' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($ctlname)) {
		$query= "update accounts set ctlname='$ctlname' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($type2)) {
		$query= "update accounts set type2='$type2' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (!empty($birth)) {
		$query= "update accounts set birth='$birth' where username='$username'";
		mysqli_query($link,$query);
		header("Location: agenteditprofile.php");
	}
	if (empty($name) & empty($age) & empty($birthday) &empty($phone) & empty($email)) {
		header("Location: agenteditprofile.php");
	}
?>