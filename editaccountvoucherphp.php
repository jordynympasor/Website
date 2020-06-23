<?php 

$clientname=$_POST['clientname'];
$percentcomm=$_POST['percentcomm'];
$project=$_POST['project'];
$grossamount=$_POST['grossamount'];
$netcomm=$_POST['netcomm'];
$particulars=$_POST['particulars'];
$ewt=$_POST['ewt'];
$account=$_POST["yes"];
$link = mysqli_connect("localhost", "root", "","login3");
$query1="SELECT * FROM voucher where number='$account'";
$result=mysqli_query($link,$query1);
$row=mysqli_fetch_array($result);
	
	if (!empty($clientname)) {
		$query= "update voucher set client_name='$clientname' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
	}
	if (!empty($percentcomm)) {
		$query= "update voucher set percent_comm='$percentcomm' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
	}
	if (!empty($project)) {
		$query= "update voucher set project='$project' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
		}
	if (!empty($grossamount)) {
		$query= "update voucher set gross_amount='$grossamount' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
	}
	if (!empty($ewt)) {
		$query= "update voucher set EWT='$ewt' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
	}
	if (!empty($netcomm)) {
		$query= "update voucher set net_comm='$netcomm' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
		}
	if (!empty($particulars)) {
		$query= "update voucher set particulars='$particulars' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewaccountvoucher.php?id=".$row['owner']."");
		}
	
?>