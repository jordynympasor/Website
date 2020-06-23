<?php 
$clientname=$_POST['clientname'];
$percent=$_POST['percent'];
$project=$_POST['project'];
$grossamount=$_POST['grossamount'];
$ewt=$_POST['ewt'];
$netcomm=$_POST['netcomm'];
$particulars=$_POST['particulars'];
$account=$_POST["yes"];

$link = mysqli_connect("localhost", "root", "","login3");
$query = "INSERT INTO voucher(`client_name`, `percent_comm`, `project`, `gross_amount`, `EWT`, `net_comm`, `particulars`, `owner`) VALUES('$clientname','$percent','$project','$grossamount','$ewt','$netcomm','$particulars','$account')";
	
	if(empty($clientname) or empty($percent) or empty($project) or empty($grossamount)){
		echo "Please fill up all forms";
	}

	else{
       mysqli_query($link,$query);
       
       header("location: viewagentvoucher.php?id=$account");
    }

?>