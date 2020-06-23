<?php 
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

$link = mysqli_connect("localhost", "root", "","login3");
$query = "INSERT INTO accounts VALUES('$username2','$password','$fname','$sname','$mname','agent','$type2','$address','$age','$phone','$birthday','$email','$sex','$birth','$religion','$nationality','$hlurb','$prc','$valid','$pwork','$yearstay','$position','$eschool','$eyear','$hschool','$hyear','$cschool','$cyear','$team','$tlname','$ctlname','','active')";

	if(empty($username2) or empty($password)){
	echo '<script>alert("Username and Password must be filled up")</script>';
	echo "<SCRIPT type='text/javascript'>
        alert('account successfully reactivated');
        window.location.replace(\"viewagentprofile.php\");
    </SCRIPT>";
	}

	else{
		$check="SELECT * FROM accounts	where username='$username2' and status='active'";
		$checkk="SELECT * FROM accounts	where username='$username2' and status='inactive'";
		$result=mysqli_query($link,$check);
		$resultt=mysqli_query($link,$checkk);
		$count=mysqli_num_rows($result);
		$countt=mysqli_num_rows($resultt);

		if($countt>0){
			$activate="UPDATE accounts SET status='active',password='$password' where username='$username2'";
			mysqli_query($link,$activate);
			echo "<SCRIPT type='text/javascript'>
        alert('account successfully reactivated');
        window.location.replace(\"viewagentprofile.php\");
    </SCRIPT>";
		}
		elseif($count>0){
			echo "<SCRIPT type='text/javascript'>
        	alert('sorry, username already taken');
        	window.location.replace(\"testcreateagent.php\");
    		</SCRIPT>";
		}
		
		else{
		mysqli_query($link,$query);
		echo "<SCRIPT type='text/javascript'>
        alert('account successfully created');
        window.location.replace(\"viewagentprofile.php\");
    </SCRIPT>";
    	}
	}
?>