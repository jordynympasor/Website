

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 0; width: 100%;"> <a class="navbar-brand" href="superuserpage.php"><img src="58779115_829177404107193_6770553374166220800_n.jpg" style="border-radius: 50%;"  width="70"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"> <a class="nav-link" href="viewallaccounts.php">View All Accounts</a> </li>
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
<br>
<br>


<form action="editaccountvoucherphp.php" method="POST" class="pure-form pure-form-aligned" style="margin-left: 500px">



    <h2>Edit                            <?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;?>'s Voucher Details</h2>
    <hr>
    <fieldset>
        <div class="pure-control-group ">
            <label for="name">Client Name</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET["id"];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;
                                        ?>" name="clientname">
        </div>

        <div class="pure-control-group">
            <label for="name">Percent Commission</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["percent_comm"] ;
                                        ?>" name="percentcomm">
        </div>

        <div class="pure-control-group">
            <label for="name">Project</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["project"] ;
                                        ?>" name="project">
        </div>

        <div class="pure-control-group">
            <label for="name">Gross Amount</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["gross_amount"] ;
                                        ?>" name="grossamount">
        </div>

        <div class="pure-control-group">
            <label for="name">EWT</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["EWT"] ;
                                        ?>" name="ewt">
        </div>

        <div class="pure-control-group">
            <label for="name">Net Commission</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["net_comm"] ;
                                        ?>" name="netcomm">
        </div>

        <div class="pure-control-group">
            <label for="name">Particulars</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM voucher where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["particulars"] ;
                                        ?>" name="particulars">
        </div>

        
 <input id="checkbox-radio-option-three" type="radio" name="yes" value="<?php echo ($_GET['id']);?>" style="display: none;">
        
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary"  value="<?php echo ($_GET['id']);?>" name="yes">Submit</button>
        </div>
    </fieldset>
</form>

</body>
</html>
