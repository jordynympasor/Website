<?php 
    $account=$_GET["id"];
    $link = mysqli_connect("localhost", "root", "","login3");
    $query= "DELETE FROM sale where number='$account'";
    if (isset($_POST["yes"])) {
       mysqli_query($link,$query);
       header("location: viewsalesinfo2.php");
    }
?>
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
    <script> function redirect() { location.replace("viewsalesinfo2.php");}</script>
                       

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 0; width: 100%;"> <a class="navbar-brand" href="adminpage.php"><img src="58779115_829177404107193_6770553374166220800_n.jpg" style="border-radius: 50%;"  width="70"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profile </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="adminprofilepage2.php">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="viewagentprofile2.php">View agent accounts</a>
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
<center>    <h5>Are you sure you would like to delete <?php $account=$_GET['id'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM sale where number='$account'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row["client_name"] ;?>'s sales details?    </h5>
    <div>
    <style scoped>

        .button-success,
        .button-error,
         {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65);
            color:  white;
        }

        .button-error {
            background: rgb(202, 60, 60);
            color:  white;
        }

    </style>

  <form method="POST">
            <button type="submit" class="button-success pure-button" name="yes">Yes</button>
</form>
            <button class="button-error pure-button" onclick="redirect();">No</button>
    
</div>
</center>
</body>
</html>