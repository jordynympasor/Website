

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
  height: 1200px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  padding-left: 25px;
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

<body background="logo8.jpg" style="background-repeat: no-repeat;">
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


<form action="editaccountsalephp.php" method="POST" class="pure-form pure-form-aligned" style="margin-left: 500px">
<div class="card" style="text-align: center;">


    <h2>Edit                            <?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;?>'s Sale</h2>
    <hr>
    <fieldset>
        <div class="pure-control-group ">
            <label for="name" style="text-align: center;">Client Name</label>
            <input id="clientname" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;
                                        ?>" name="clientname">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Complete Address</label>
            <input class="pure-input-2-3" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["address"] ;
                                        ?>" name="address"><br>
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Date Reserved</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["date_reserved"] ;
                                        ?>" name="datereserved">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Project</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["project"] ;
                                        ?>" name="project">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Phase</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["phasee"] ;
                                        ?>" name="phase">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Terms</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["terms"] ;
                                        ?>" name="terms">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Block</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["block"] ;
                                        ?>" name="block">
        </div>

        <div class="pure-control-group">
            <label for="email" style="text-align: center;">Lot</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["lot"] ;
                                        ?>" name="lot">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Unit</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["unit"] ;
                                        ?>" name="unit">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Financing</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["financing"] ;
                                        ?>" name="financing">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Gross TCP</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["gross_TCP"] ;
                                        ?>" name="grosstcp">
        </div>

        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Net TCP</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["net_TCP"] ;
                                        ?>" name="nettcp">
        </div>
        <div class="pure-control-group">
            <label for="name" style="text-align: center;">Percent Comm(%)</label>
            <input id="name" type="text" placeholder="<?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["percent_comm"] ;
                                        ?>" name="percent">
        </div>
 <input id="checkbox-radio-option-three" type="radio" name="yes" value="<?php echo ($_GET['id']);?>" style="display: none;">
        
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary"  value="<?php echo ($_GET['id']);?>" name="yes">Submit</button>
        </div>
    </fieldset>
</div>
</form>

</body>
</html>
