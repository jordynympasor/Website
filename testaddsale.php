

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
            
      </li>
        
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
<div class="card" style="text-align: left">


    <h2>Add <?php echo ($_GET['id']);?>'s Sale</h2>
    <hr>
    <fieldset>
        <div class="pure-control-group ">
            <label for="name">Client Name</label>
            <input id="clientname" type="text" placeholder="Client Name" name="clientname">
        </div>

        <div class="pure-control-group">
            <label for="name">Complete Address</label>
            <input class="pure-input-2-3" type="text" placeholder="Address" name="address"><br>
        </div>

        <div class="pure-control-group">
            <label for="name">Date Reserved</label>
            <input id="name" type="text" placeholder="Date Reserved" name="datereserved">
        </div>

        <div class="pure-control-group">
            <label for="name">Project</label>
            <input id="name" type="text" placeholder="Project" name="project">
        </div>

        <div class="pure-control-group">
            <label for="name">Phase</label>
            <input id="name" type="text" placeholder="Phase" name="phase">
        </div>

        <div class="pure-control-group">
            <label for="name">Terms</label>
            <input id="name" type="text" placeholder="Terms" name="terms">
        </div>

        <div class="pure-control-group">
            <label for="name">Block</label>
            <input id="name" type="text" placeholder="Block" name="block">
        </div>

        <div class="pure-control-group">
            <label for="email">Lot</label>
            <input id="name" type="text" placeholder="Lot" name="lot">
        </div>

        <div class="pure-control-group">
            <label for="name">Unit</label>
            <input id="name" type="text" placeholder="Unit" name="unit">
        </div>

        <div class="pure-control-group">
            <label for="name">Financing</label>
            <input id="name" type="text" placeholder="Financing" name="financing">
        </div>

        <div class="pure-control-group">
            <label for="name">Gross TCP</label>
            <input id="name" type="text" placeholder="Gross TCP" name="grosstcp">
        </div>

        <div class="pure-control-group">
            <label for="name">Net TCP</label>
            <input id="name" type="text" placeholder="Net TCP" name="nettcp">
        </div>
        <div class="pure-control-group">
            <label for="name">Percent Comm(%)</label>
            <input id="name" type="text" placeholder="Percent Comm(%)" name="percent">
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
