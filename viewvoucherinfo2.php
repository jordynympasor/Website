<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<style type="text/css">
        .card {
  /* Add shadows to create the "card" effect */
  margin-top: 100px;
  margin-left: 200px;
  height: 10px;
  width: 900px;
  padding-top: 25px;
  background-color: transparent;

}


/* Add some padding inside the card container */
.container {
    color: transparent;
  padding: 2px 16px;
}</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>

<body background="logo8.jpg">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 0; width: 100%;"> <a class="navbar-brand" href="adminpage.php"><img src="58779115_829177404107193_6770553374166220800_n.jpg" style="border-radius: 50%;"  width="70"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:"> Profile </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="adminprofilepage2.php">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="viewagentprofile.php">View agent accounts</a>
            <div class="dropdown-divider"></div>

          
      </li>
        <li class="nav-item"> <a class="nav-link" href="viewsalesinfo2.php">View Sales Info</a> </li>
            

        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;"> Welcome <?php session_start(); echo $_SESSION['username']; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="supersample.php" onclick="">Logout</a></div></li>

        </ul>
        
    
    
  </div>
</nav>
<script src="jquery-3.2.1.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap-4.0.0.js"></script>
<div class="card">
 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                      <span style="float:right;">
                    Remaining Comm: <p id='demo' style="font-weight:bold;"></p><?php $account=$_GET['id'];
                                          $link = mysqli_connect("localhost", "root", "","login3");
                                          $query1="SELECT * FROM sale where number='$account'";
                                          $result1=mysqli_query($link,$query1);
                                          $row1=mysqli_fetch_array($result1);
                                          $query2="SELECT * FROM voucher where ownernumber='$account'";
                                          $result2=mysqli_query($link,$query2);
                                          $row2=mysqli_fetch_array($result2);
                                          $query3="SELECT SUM(gross_amount) AS gross_amount from voucher where ownernumber='$account'";
                                          $result3=mysqli_query($link,$query3);
                                          $row3=mysqli_fetch_array($result3);
                                          
                                          echo "<p id='demo'></p><script>var nettcp=".$row1['net_TCP'].";
                                                        var percent=".$row1['percent_comm'].";
                                                        var totalcomm= nettcp*(percent/100);
                                                        var recievedcomm=".$row3['gross_amount']."
                                                        var remainingcomm=totalcomm - recievedcomm;
                                                        document.getElementById('demo').innerHTML = remainingcomm+' php';</script>
                                                        "; ?>
                    </span>
                        <h2 class="pull-left"> <?php echo $_SESSION['username'];?>'s Voucher Details</h2>
                        <a href="addvoucher2.php?id=<?php echo $_GET['id'];?>" class="btn btn-success pull-right" style="background-color:#ED9428;border: none;color">Add New voucher</a>
                    </div>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a voucher..." title="Type in a name">
                    
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $account=$_SESSION['username'];
                    $numberr=$_GET['id'];
                    $sql = "SELECT * FROM voucher where ownernumber='$numberr'";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped' id='myTable2'>";
                            echo "<col width='130'>";
                            echo "<col width='130'>";
                            echo "<col width='100'>";
                            echo "<col width='80'>";
                            echo "<col width='80'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th onclick='sortTable(0)'>Gross Amount</th>";
                                        echo "<th onclick='sortTable(1)'>Net Commission</th>";
                                        
                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['gross_amount'] . "</td>";
                                        echo "<td>" . $row['net_comm'] . "</td>";
                                        
                                        


                                        
                                        echo "<td>";
                                            echo "<a href='viewvoucher2.php?id=". $row['number'] ."' class='btn btn-success pull-right' style='background-color:#ED9428;border: none'>View</a>";
                                            echo "&nbsp;";
                                            echo "<a href='editvoucher2.php?id=". $row['number'] ."' class='btn btn-success pull-right' style='background-color:#ED9428;border: none'>Edit</a>";
                                            echo "&nbsp;";
                                            
                                            echo "<a href='deletevoucher2.php?id=". $row['number'] ."' class='btn btn-success pull-right' style='background-color:#ED9428;border: none'>Delete</a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</div>
</body>
</html>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    td3 = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      txtValue3 = td3.textContent || td3.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  
}

</script>