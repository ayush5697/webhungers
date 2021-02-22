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
	<script>  

	function validateform(){  
		var name=document.myform.username.value;
		var email=document.myform.email.value;
		var emailp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var mobile=document.myform.mobile.value;  
		var mobilep = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

		if (name==null || name=="") {  
		  alert("Name can't be blank");
		  return false;  
		}

		if (email == '' || !emailp.test(email)) {
		    alert('Please enter a valid email address.');
		    return false;
		}       

		if(mobile=='' || !mobilep.match(mobile)) {
		  alert('Please enter a  mobile number.');
		  return false;
	    }
	}
</script> 

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
	        <li class="active"><a href="index.php">Home</a></li>
	        <li class="active"><a href="login.php">Login</a></li>
	      </ul>
	      
	    </div>
	</div>
	</nav>

	<div class="container">
<div class="col-md-offset-3 col-md-6">
	<div class="form-user">
		<br><h3 style="color:blue; font-family: italic;" align="center"><b>Register User</b></h3>
		<div class="update-form">
		<form method="post" name="myform" action="insert.php" enctype="multipart/form-data" onsubmit="return validateform()">
			
			<input type="text" placeholder="NAME" name="username" class="form-control" style="font-weight: bold;">			

			<input type="email" placeholder="EMAIL*" name="email" class="form-control" style="font-weight: bold;">

			<input type="text" placeholder="MOBILE NO*" minlength="10" maxlength="10" name="mobile" class="form-control" style="font-weight: bold;">

			<input type="password" placeholder="password*"  name="password" class="form-control" style="font-weight: bold;">

			<div class="form-group col-lg-4 col-lg-offset-4">
          		<button type="submit" value="Register" name="submit" class="btn btn-primary" style="border-radius: 25px; width: 120px;">ADD USER</button>
      		</div>
      	</form>
      	</div>

	</div>	
</div>
        
<?php include 'footer.php'  ?>

            
          
            
              

              
              