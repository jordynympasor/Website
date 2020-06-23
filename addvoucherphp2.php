<?php 
session_start();
$account1=$_SESSION['username'];
$percent=$_POST['percent'];
$project=$_POST['project'];
$grossamount=$_POST['grossamount'];
$ewt=$_POST['ewt'];
$netcomm=$_POST['netcomm'];
$particulars=$_POST['particulars'];
$account=$_POST["yes"];
$link = mysqli_connect("localhost", "root", "","login3");
$query1="SELECT * FROM sale where number='$account'";
$result=mysqli_query($link,$query1);
$owner=mysqli_fetch_array($result);
$owner1=$owner["client_name"];

$query = "INSERT INTO voucher(`client_name`, `percent_comm`, `project`, `gross_amount`, `EWT`, `net_comm`, `particulars`, `owner`,`ownernumber`) VALUES('$owner1','$percent','$project','$grossamount','$ewt','$netcomm','$particulars','$account1','$account')";
	
	if(empty($percent) or empty($project) or empty($grossamount)){
		echo "Please fill up all forms";
	}

	else{
       mysqli_query($link,$query);
       
       header("location: viewvoucherinfo2.php?id=$account");
    }

?>