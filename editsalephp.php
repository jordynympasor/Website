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
	
	echo "$account";
	if (!empty($clientname)) {
		$query= "update sale set client_name='$clientname' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($address)) {
		$query= "update sale set address='$address' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($datereserved)) {
		$query= "update sale set date_reserved='$datereserved' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($project)) {
		$query= "update sale set project='$project' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
		}
	if (!empty($phase)) {
		$query= "update sale set terms='$terms' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($terms)) {
		$query= "update sale set phasee='$phase' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($block)) {
		$query= "update sale set block='$block' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
		}
	if (!empty($lot)) {
		$query= "update sale set lot='$lot' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
		}
	if (!empty($unit)) {
		$query= "update sale set unit='$unit' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($financing)) {
		$query= "update sale set financing='$financing' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($grosstcp)) {
		$query= "update sale set gross_TCP='$grosstcp' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($nettcp)) {
		$query= "update sale set net_TCP='$nettcp' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}
	if (!empty($percent)) {
		$query= "update sale set percent_comm='$percent' where number='$account'";
		mysqli_query($link,$query);
		header("Location: viewsalesinfo2.php");
	}	
	
?>