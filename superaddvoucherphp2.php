<?php 
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
$owner2=$owner["owner"];
$owner3=$owner["project"];
$owner4=$owner["percent_comm"];
$query = "INSERT INTO voucher(`client_name`, `percent_comm`, `project`, `gross_amount`, `EWT`, `net_comm`, `particulars`, `owner`,`ownernumber`) VALUES('$owner1','$owner4','$owner3','$grossamount','$ewt','$netcomm','$particulars','owner2','$account')";
	
	if(empty($grossamount)){
		echo "Please fill up all forms";
	}

	else{
       mysqli_query($link,$query);
       
       header("location: viewaccountvoucher2.php?id=$account");
    }

?>