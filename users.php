<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title part-->
	<link rel="shortcut icon" href="image/task.jpg" type="image/png">
	<title>USER TASK</title>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="custom.js"></script>


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
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      
	        <li><a href="users.php">VIEW USERS</a></li>
	        <li><a href="logout.php">LOGOUT</a></li>
	      </ul>
	    </div>
	</div>
	</nav>

		<div align="right">
		   <button style="border-radius: 25px; width: 100px; border:none;"><a href="excel.php">Excel</a></button>
		   <button style="border-radius: 25px; width: 100px; border:none;"  id="btn">pdf</button>
		</div>
<h3 align="center" style="color:blue; font-family: italic;">USERS</h3>

	<div class="container">

		
		<?php 
		  include('db_connection.php');

  		  $sql="SELECT * FROM user ";

  		  $result = $con->query($sql);

  		   if($result->num_rows>0)
  			 {
  			 	
  			 		?>
					<div class="table-responsive">          
					  <table class="table">
					    <thead>
					      <tr>
					       
					        <th>NAME</th>
					        <th>EMAIL ID</th>
					        <th>MOBILE*</th>
					        <th>PASSWORD</th>
					       
					    
					      </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    		while($row = $result->fetch_assoc()) 
  			 						{
					    	?>
					      <tr>
					        <td><?php echo strtoupper($row["username"]);?></td>
					        <td><?php echo strtolower($row["email"]);?></td>
					        <td><?php echo ($row["mobile"]);?></td>
					        <td><?php echo ($row["password"]);?></td>
					        
					       
					      </tr>
					      	<?php  }	?>
					    </tbody>
					  </table>
					 </div>
					 <?php
				
			}
					 ?>
		
	</div>
<?php include 'footer.php' ?>