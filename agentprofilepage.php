<!doctype html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="profile.css" rel="stylesheet" type="text/css">
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
          <a class="dropdown-item" href="supersample.php">Logout</a>
      </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sales Monitoring</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
          <a class="dropdown-item" href="#">Daily</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Weekly</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Monthly</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Annually</a>
          </div>
            
      </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> View Voucher</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
              <a class="dropdown-item" href="#">Voucher Number</a> 
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Voucher Date</a>
          
      </li>
        
        <li class="nav-item"> <a class="nav-link" href="#">Welcome <?php session_start(); echo $_SESSION['username']; ?> </li>
      
    </ul>
    
  </div>
</nav>
<script src="jquery-3.2.1.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap-4.0.0.js"></script>



<div class="container emp-profile">
    
                      
                <?php 
                
                $username=$_SESSION['username'] ;
                $link = mysqli_connect("localhost", "root", "","login3");
                $query = "SELECT * FROM accounts where username='$username'";  
                $result = mysqli_query($link, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                            
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['profile'] ).'" height="200" width="200" class="img-thumnail" />  
                                
                     ';  
                }  
                ?>  
                
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php $username=$_SESSION['username'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM accounts where username='$username'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row['name'];
                                        ?>
                                    </h5>
                                    <h6>
                                        <?php $username=$_SESSION['username'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM accounts where username='$username'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row['type'];
                                        ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                        <input type="button" class="profile-edit-btn" onclick="editprofile()" name="btnAddMore"  value="Edit Info">
                        <script> function editprofile() { location.replace("editprofile2.php");}</script>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['username'];
                                                ?> </p> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['age'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['email'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['contact'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthday</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['birthday'];
                                                ?></p>
                                            </div>
                                        </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>


</body>
</html>
