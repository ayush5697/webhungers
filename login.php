<?php
session_start();

if(isset($_SESSION['user_n1']))
{
  header('location:index.php');

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title part-->
  <link rel="shortcut icon" href="image/task.jpg" type="image/png">
  <title>USER </title>
  <!-- title part end here-->
  
  <!-- bootstrap file-->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
  <!--bootstrap file end here-->
  
  <!--styling-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--styling-->

</head>

<body>
  <!--navigation bar-->
  <nav class="navbar navbar-inverse" style="background-color: #2953F0;">
    <div class="container-fluid">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Registration</a></li>
          
        </ul>
        
      </div>
  </div>
  </nav>

<div class="col-md-offset-3 col-md-6">
  <div class="form-user">
    <br><h3 style="color:blue; font-family: italic;" align="center"><b> Login</b></h3>
    <div class="update-form">
    <form method="post" name="myform" action="" enctype="multipart/form-data" onsubmit="return validateform()">
      
      <input type="text" placeholder="Mobile No" name="uname" class="form-control" style="font-weight: bold;">
       <input type="password" placeholder="Password" name="password" class="form-control" style="font-weight: bold;">     

     

      <div class="form-group col-lg-4 col-lg-offset-4">
              <button type="submit" value="Register" name="submit" class="btn btn-primary" style="border-radius: 25px; width: 120px;">Login</button>
          </div>
        </form>
        </div>

  </div>  
</div>
        
<?php include 'footer.php'  ?>

<?php
      
     if(isset($_POST["submit"]))
      {
        include("db_connection.php");
        $uname=$_POST["uname"];
        $pwd = $_POST["password"];

      $query= "SELECT mobile, password, user_type FROM user WHERE mobile = '$uname' AND password = '$pwd'";
      $execute = mysqli_query($con, $query);
      $fetch = mysqli_fetch_array($execute);
      $un = $fetch['mobile'];
      $pw = $fetch['password'];
      $utype = $fetch['user_type'];

      if($un == $uname && $pw == $pwd && $utype=="Admin")
      {
        
        $_SESSION['mobile'] = $un;
        echo "<script> 
        alert('Successfully Login') 
        window.location = 'users.php';
        </script>";
      }
      else if($un == $uname && $pw == $pwd && $utype=="Customer")
      {
        
          $user_n1 = $fetch['mobile'];
          echo $user_n1;
          $_SESSION['user_n']=$user_n1;
        echo "<script> 
        alert('Successfully') 
        window.location = 'wel.php';
        </script>";
      }
      else
      {
        

        echo "<script> 
        alert('User Name or Password  was Invailed !!') 
        window.location = '#';
        </script>";
      }
       }


       ?>

