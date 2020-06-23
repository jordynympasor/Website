

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<style type="text/css">
        .card {
  /* Add shadows to create the "card" effect */
  height: 700px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  background-color: transparent;

}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 32px 64px 0 rgba(0,0,0,0.2);
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
      
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profile </a>
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
<br>
<br>


<form action="testaddsalephp.php" method="POST" class="pure-form pure-form-aligned" style="margin-left: 500px">

<div class="card" style="text-align: center;">

    <h2>View                            <?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;?>'s Sales Details</h2>
    <hr>
    <fieldset>
        <div class="pure-control-group ">
            <label for="name" style="text-align: left;">Client Name: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;
                                        ?></b></label>
                                                
                                       
                                    
        </div>



        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Address: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["address"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Reserve Date: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["date_reserved"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Project: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["project"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Phase: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["phasee"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Terms: <b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["terms"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Block:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["block"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="email" style="text-align: left;">Lot:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["lot"] ;
                                        ?></b></label>
           
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Unit:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["unit"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name"  style="text-align: left;">Financing:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["financing"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Gross TCP:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["gross_TCP"] ;
                                        ?></b></label>
            
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Net TCP:<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["net_TCP"] ;
                                        ?></b></label>
            
        </div>
        <div class="pure-control-group">
            <label for="name" style="text-align: left;">Percent Comm(%):<b>&nbsp;<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["percent_comm"] ;
                                        ?></b></label>
            
        </div>
 
        
            </fieldset>
        </div>
</form>

</body>
</html>
