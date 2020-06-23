<?php 
$account=$_POST['yes'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM accounts where username='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
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

$birth=$_POST['birth'];
$username2=$_POST['username'];

	
	if (!empty($fname)) {
		$query= "update accounts set fname='$fname' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
		}
	if (!empty($sname)) {
		$query= "update accounts set sname='$sname' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($mname)) {
		$query= "update accounts set mname='$mname' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($age)) {
		$query= "update accounts set age='$age' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
		}
	if (!empty($email)) {
		$query= "update accounts set email='$email' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
		}
	if (!empty($phone)) {
		$query= "update accounts set contact='$phone' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
		}
	if (!empty($birthday)) {
		$query= "update accounts set birthday='$birthday' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
		}
	if (!empty($address)) {
		$query= "update accounts set address='$address' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($sex)) {
		$query= "update accounts set sex='$sex' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($religion)) {
		$query= "update accounts set religion='$religion' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($nationality)) {
		$query= "update accounts set nationality='$nationality' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($hlurb)) {
		$query= "update accounts set hlurb='$hlurb' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($prc)) {
		$query= "update accounts set prc='$prc' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($valid)) {
		$query= "update accounts set valid='$valid' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($pwork)) {
		$query= "update accounts set pwork='$pwork' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($yearstay)) {
		$query= "update accounts set yearstay='$yearstay' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($position)) {
		$query= "update accounts set position='$position' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($eschool)) {
		$query= "update accounts set eschool='$eschool' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($eyear)) {
		$query= "update accounts set eyear='$eyear' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($hschool)) {
		$query= "update accounts set hschool='$hschool' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($hyear)) {
		$query= "update accounts set hyear='$hyear' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($cschool)) {
		$query= "update accounts set cschool='$cschool' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($cyear)) {
		$query= "update accounts set cyear='$cyear' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if ($team!="") {
		$query= "update accounts set team='$team' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($tlname)) {
		$query= "update accounts set tlname='$tlname' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($ctlname)) {
		$query= "update accounts set ctlname='$ctlname' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if ($row['type']== "agent") {
		$type2=$_POST['optionsRadios'];
		$query= "update accounts set type2='$type2' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($birth)) {
		$query= "update accounts set birth='$birth' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($password)) {
		$query= "update accounts set password='$password' where username='$account'";
		mysqli_query($link,$query);
		header("Location: viewallaccounts.php");
	}
	if (!empty($username2)) {
		$check="SELECT * FROM accounts	where username='$username2'";
		$result=mysqli_query($link,$check);
		$count=mysqli_num_rows($result);

		if($count>0){
			echo "<SCRIPT type='text/javascript'>
        	alert('sorry, username is already taken');
        	window.location.replace(\"viewallaccounts.php\");
    		</SCRIPT>";
		}
		else{
			$query= "update accounts set username='$username2' where username='$account'";
			mysqli_query($link,$query);
			header("Location: viewallaccounts.php");
		}
	}
	
	else{header("Location: viewallaccounts.php");}
?>