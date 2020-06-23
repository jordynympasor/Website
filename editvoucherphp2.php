<?php 
$grossamount=$_POST['grossamount'];
$netcomm=$_POST['netcomm'];
$particulars=$_POST['particulars'];
$ewt=$_POST['ewt'];
$account=$_POST["yes"];
$link = mysqli_connect("localhost", "root", "","login3");
$query1="SELECT * FROM voucher where number='$account'";
$result=mysqli_query($link,$query1);
$row=mysqli_fetch_array($result);
	if (!empty($grossamount)) {
		$query= "update voucher set gross_amount='$grossamount' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewvoucherinfo2.php?id=".$row['ownernumber']."");
	}
	if (!empty($ewt)) {
		$query= "update voucher set EWT='$ewt' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewvoucherinfo2.php?id=".$row['ownernumber']."");
	}
	if (!empty($netcomm)) {
		$query= "update voucher set net_comm='$netcomm' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewvoucherinfo2.php?id=".$row['ownernumber']."");
		}
	if (!empty($particulars)) {
		$query= "update voucher set particulars='$particulars' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewvoucherinfo2.php?id=".$row['ownernumber']."");
		}
	
?>