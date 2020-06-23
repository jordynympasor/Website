<?php  
session_start();
$username=$_SESSION['username'];
 $connect = mysqli_connect("localhost", "root", "", "login3");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE accounts set profile= '$file' where username='$username';";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';

      }  
 }  
 ?> 

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
<style type="text/css">
        .card {
  /* Add shadows to create the "card" effect */

  height: 600px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  padding-left: 25px;
  background-color: transparent;

}
.card3 {
  /* Add shadows to create the "card" effect */

  height: 200px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  padding-left: 25px;
  background-color: transparent;

}
.card4 {
  /* Add shadows to create the "card" effect */

  height: 500px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  padding-left: 25px;
  background-color: transparent;

}
.card5 {
  /* Add shadows to create the "card" effect */

  height: 200px;
  width: 400px;
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 25px;
  padding-left: 25px;
  background-color: transparent;

}
.card2 {
  /* Add shadows to create the "card" effect */
  height: 300px;
  width: 200px;

  background-color: transparent;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,.5);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container2 {
    background:rgba(255,255,255,0.5);
  padding: 2px 16px;
}
}</style>
</head>

<body background="logo8.jpg" style="background-repeat: no-repeat;">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 0; width: 100%;"> <a class="navbar-brand" href="agentpage.php"><img src="58779115_829177404107193_6770553374166220800_n.jpg" style="border-radius: 50%;"  width="70"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profile </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="agenteditprofile.php">Edit Profile</a>
           

          
      </li>
        <li class="nav-item"> <a class="nav-link" href="agentviewsalesinfo.php">View Sales Info</a> </li>
            
     
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;"> Welcome <?php  echo $_SESSION['username']; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="supersample.php" onclick="">Logout</a></div></li>

        </ul>
        
    
    
  </div>
</nav>
<script src="jquery-3.2.1.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap-4.0.0.js"></script>



<div class="container emp-profile">
    
                      <div style="padding-left: 700px">
                  
                </div>


                <div class="card2" style="margin-left: 700px">
                <?php 
                
                $username=$_SESSION['username'] ;
                $link = mysqli_connect("localhost", "root", "","login3");
                $query = "SELECT * FROM accounts where username='$username'";  
                $result = mysqli_query($link, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                            
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['profile'] ).'" style="width:200px; height:200px" class="img-thumnail"/>  
                                
                     ';  
                }  
                ?>
                <div class="container2">
                 <h4><b><?php $username=$_SESSION['username'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM accounts where username='$username'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row['fname']. " " . $row['sname']  ;
                                        ?></b></h4>
                <p><?php $username=$_SESSION['username'];
                                        $link = mysqli_connect("localhost", "root", "","login3");
                                        $query= "SELECT * FROM accounts where username='$username'";
                                        $result = mysqli_query($link,$query);
                                        $row = mysqli_fetch_array($result);
                                        echo  $row['type2'];
                                        ?></p>
                 </div>
                </div>


                <form method="post" enctype="multipart/form-data" >  
                     <input type="file" name="image" id="image" style="padding-left:700px" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Change image" class="btn btn-info" style="margin-left: 700px" />  
                </form>


            <form method="post">

                <div  style="margin-right: 300px">
                   
                        <div class="">
                                    <h5>
                                       
                                    </h5>
                                    <h6>
                                        
                                    </h6>
                                   <input  type="button" class="btn btn-info" onclick="editprofile()" name="btnAddMore"  value="Edit Info" style="margin-left: 700px">
                        <script> function editprofile() { location.replace("agentedit.php");}</script>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile1-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="true" style="font-size: 30px">Personal Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="false" style="font-size: 30px">Work Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false" style="font-size: 30px">Educational Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="team-tab" data-toggle="tab" href="#team" role="tab" aria-controls="team" aria-selected="false" style="font-size: 30px">Team Information</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                        
                       
                    </div>
                </div>
                <div style="margin-left: 500px ">
                
                <div class="row">
                   

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active card" id="profile1" role="tabpanel" aria-labelledby="profile1-tab" style="">
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
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['address'];
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
                                                <label>Sex</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['sex'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthplace</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['birth'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Religion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['religion'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['nationality'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>HLURB License Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['hlurb'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>PRC Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['prc'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Valid Until</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['valid'];
                                                ?></p>
                                            </div>
                                 </div>                                               
                            </div>
                            <div class="tab-pane fade card3" id="work" role="tabpanel" aria-labelledby="work-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Previous Word</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['pwork'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Years of Stay</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['yearstay'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Position</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['position'];
                                                ?></p>
                                            </div>
                                        </div>
                                </div>        
                                <div class="tab-pane fade card4" id="education" role="tabpanel" aria-labelledby="education-tab">
                                        <div class="row">
                                            <div class="col-md-6" style="margin-left: 150px">
                                                <label>Elementary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name of School</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['eschool'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year Graduated</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['eyear'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="margin-left: 150px">
                                                <label>Highschool</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name of School</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['hschool'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year Graduated</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['hyear'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="margin-left: 150px">
                                                <label>College</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name of School</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['cschool'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year Graduated</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['cyear'];
                                                ?></p>
                                            </div>
                                        </div>
                                        
                                </div>
                                <div class="tab-pane fade card5" id="team" role="tabpanel" aria-labelledby="team-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Team Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['team'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Team Leader Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['tlname'];
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Co-Team Leader Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php $username=$_SESSION['username'];
                                                $link = mysqli_connect("localhost", "root", "","login3");
                                                $query= "SELECT * FROM accounts where username='$username'";
                                                $result = mysqli_query($link,$query);
                                                $row = mysqli_fetch_array($result);
                                                echo  $row['ctlname'];
                                                ?></p>
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

 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
<script>
 var uploadField = document.getElementById("image");

uploadField.onchange = function() {
    if(this.files[0].size > 1048576){
       alert("File is too big! Image must be less than 1MB");
       this.value = "";
    };
};
</script>