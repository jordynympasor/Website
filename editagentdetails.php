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
  height: 3250px;
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

<center><h1>Edit <?php echo ($_GET['id']);?>'s Profile</h1></center>
<br>
<hr>
<form action="editagentdetailsphp.php" method="post" class="pure-form pure-form-aligned" style="margin-left: 500px">
<div class="card" style="text-align: center;">
    <h2>Type</h2>
    <hr>

    <label for="checkbox-radio-option-two" class="pure-radio">
            <input id="checkbox-radio-option-two" type="radio" name="optionsRadios" value="Salesperson" >
            Salesperson
        </label>
    
        <label for="checkbox-radio-option-three" class="pure-radio">
            <input id="checkbox-radio-option-three" type="radio" name="optionsRadios" value="Sales Manager">
            Sales Manager
        </label>

    <label for="checkbox-radio-option-two" class="pure-radio">
            <input id="checkbox-radio-option-two" type="radio" name="optionsRadios" value="Sales Director" >
            Sales Director
        </label>
    
        <label for="checkbox-radio-option-three" class="pure-radio">
            <input id="checkbox-radio-option-three" type="radio" name="optionsRadios" value="Broker Manager">
            Broker Manager
        </label>

    <label for="checkbox-radio-option-two" class="pure-radio">
            <input id="checkbox-radio-option-two" type="radio" name="optionsRadios" value="Employee" >
            Employee
        </label>

    
    <br>
    <br>
    <h2>Personal Information</h2>
    <hr>
    <fieldset>
        <div class="pure-control-group ">
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="Username" name="username">
          
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password" name="password">
        </div>

        <div class="pure-control-group">
            <label for="name">First Name</label>
            <input id="name" type="text" placeholder="First Name" name="fname">
        </div>

        <div class="pure-control-group">
            <label for="name">Surname</label>
            <input id="name" type="text" placeholder="Surname" name="sname">
        </div>

        <div class="pure-control-group">
            <label for="name">Middle Name</label>
            <input id="name" type="text" placeholder="Middle Name" name="mname">
        </div>

        <div class="pure-control-group">
            <label for="name">Complete Address</label>
            <input class="pure-input-2-3" type="text" placeholder="Address" name="address"><br>
        </div>

        <div class="pure-control-group">
            <label for="name">Contact Number</label>
            <input id="name" type="text" placeholder="Contact Number" name="contact">
        </div>

        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Email" name="email">
        </div>

        <div class="pure-control-group">
            <label for="name">Birthday</label>
            <input id="name" type="text" placeholder="Birthday" name="birthday">
        </div>

        <div class="pure-control-group">
            <label for="name">Sex</label>
            <input id="name" type="text" placeholder="Sex" name="sex">
        </div>

        <div class="pure-control-group">
            <label for="name">Age</label>
            <input id="name" type="text" placeholder="Age" name="age">
        </div>

        <div class="pure-control-group">
            <label for="name">Place of Birth</label>
            <input id="name" type="text" placeholder="Place of Birth" name="birth">
        </div>

        <div class="pure-control-group">
            <label for="name">Religion</label>
            <input id="name" type="text" placeholder="Religion" name="religion">
        </div>

        <div class="pure-control-group">
            <label for="name">Nationality</label>
            <input id="name" type="text" placeholder="Nationality" name="nationality">
        </div>

        <div class="pure-control-group">
            <label for="name">HLURB License Number</label>
            <input id="name" type="text" placeholder="HLURB License Number" name="hlurb">
        </div>

        <div class="pure-control-group" style="margin-left: 50px">
            <label for="name">PRC Number</label>
            <input id="name" type="text" placeholder="PRC Number" name="prc">
        </div>

        <div class="pure-control-group" style="margin-left: 50px">
            <label for="name">Valid Until</label>
            <input id="name" type="text" placeholder="Valid Until" name="valid">
        </div>

        <br>
        <br>

        <h2>Work Experience</h2>
        <hr>
        <div class="pure-control-group">
            <label for="name">Previous Work</label>
            <input id="name" type="text" placeholder="Previous Work" name="pwork">
        </div>

        <div class="pure-control-group">
            <label for="name">Years of Stay</label>
            <input id="name" type="text" placeholder="Years of Stay" name="yearstay">
        </div>

        <div class="pure-control-group">
            <label for="name">Position</label>
            <input id="name" type="text" placeholder="Position" name="position">
        </div>

        <br>
        <br>

        <h2>Educational Background</h2>
        <hr>
        <h5 style="margin-left: 50px">Elementary</h3>
          <div class="pure-control-group">
            <label for="name">Name of School</label>
            <input id="name" type="text" placeholder="Name of School" name="eschool">
        </div>

        <div class="pure-control-group">
            <label for="name">Year Graduated</label>
            <input id="name" type="text" placeholder="Year Graduated" name="eyear">
        </div>

        <br>

        <h5 style="margin-left: 50px">Highschool</h3>
          <div class="pure-control-group">
            <label for="name">Name of School</label>
            <input id="name" type="text" placeholder="Name of School" name="hschool">
        </div>

        <div class="pure-control-group">
            <label for="name">Year Graduated</label>
            <input id="name" type="text" placeholder="Year Graduated" name="hyear">
        </div>

        <br>

        <h5 style="margin-left: 50px">College</h3>
          <div class="pure-control-group">
            <label for="name">Name of School</label>
            <input id="name" type="text" placeholder="Name of School" name="cschool">
        </div>

        <div class="pure-control-group">
            <label for="name">Year Graduated</label>
            <input id="name" type="text" placeholder="Year Graduated" name="cyear">
        </div>

        <br>
        <br>

        <h2>Team Information</h2>
        <hr>
        <div class="pure-control-group">
        <label for="Team">Team</label>
        <select id="Team" name="team">
            <option value=""></option>
            <option value="Squad">Squad</option>
            <option value="Pioneer">Pioneer</option>
            <option value="Push">Push</option>
            <option value="Elite">Elite</option>
            <option value="Synergy">Synergy</option>
            <option value="Direct">Direct</option>
            <option value="Affluence">Affluence</option>
            <option value="Zia">Zia</option>
        </select>
        </div>
        <div class="pure-control-group">
            <label for="name">Team Leader Name</label>
            <input id="name" type="text" placeholder="Team Leader Name" name="tlname">
        </div>

        <div class="pure-control-group">
            <label for="name">Co-Team Leader Name</label>
            <input id="name" type="text" placeholder="Co-Team Leader Name" name="ctlname">
        </div>








<input id="checkbox-radio-option-three" type="checkbox" name="yes" value="<?php echo ($_GET['id']);?>" style="display: none;" checked>



        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</div>
</form>

</body>
</html>