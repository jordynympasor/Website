<?php 
$clientname=$_POST['clientname'];
$address=$_POST['address'];
$datereserved=$_POST['datereserved'];
$project=$_POST['project'];
$phase=$_POST['phase'];
$terms=$_POST['terms'];
$block=$_POST['block'];
$lot=$_POST['lot'];
$unit=$_POST['unit'];
$financing=$_POST['financing'];
$grosstcp=$_POST['grosstcp'];
$nettcp=$_POST['nettcp'];
$percent=$_POST['percent'];
$account=$_POST["yes"];

$link = mysqli_connect("localhost", "root", "","login3");
$query = "INSERT INTO sale(`client_name`, `address`, `date_reserved`, `project`, `terms`, `phasee`, `block`, `lot`, `unit`, `financing`, `gross_TCP`, `net_TCP`,`percent_comm`, `owner`) VALUES('$clientname','$address','$datereserved','$project','$phase','$terms','$block','$lot','$unit','$financing','$grosstcp','$nettcp','$percent','$account')";
	
	if(empty($clientname) or empty($datereserved) or empty($project) or empty($unit)){
		echo "Please fill up all forms";
	}

	else{
       mysqli_query($link,$query);
       
       header("location: viewsalesinfo2.php");
    }

?>