<!DOCTYPE html>
<html>
<head>
<title>Staff Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
<style type="text/css">
	.form-group input[type="text"]{
		width: 250px;
	}
	.form-group input[type="password"]{
		width: 250px;
	}
	form{
		float: right;
		margin-right: 100px;

	}
    h5{
    	color: red;
    }
   
     h2{
    	color: red;
    }
 
</style>
</head>
<body>

<h1 align="center">VALLEY LIFE WATER MANAGEMENT SYSTEM</h1>
<hr>
<hr>
<div class="main-agileits"> 
  <!--form-stars-here-->
  <div class="form-w3-agile">
    <h2 align="center">Staff Login</h2>
    
  </div>
  <!--//form-ends-here--> 
</div>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	
  	<form name="ob" method="post" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail2">Username</label>
    <input type="text" name="Username" class="form-control" id="exampleInputEmail2" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-default" name="sub">Login</button>
</form>


  </div>
  <div class="col-md-4"></div>
</div>

<!-- copyright -->

<!-- //copyright --> 
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<!-- pop-up-box --> 
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> 
<!--//pop-up-box --> 
<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>
<?php 
		require ("testmysql.php");
		if (isset($_POST["sub"])) {
			$user = $_POST['Username'];
			$pword = $_POST['Password'];
			$sql= "SELECT * FROM login";
		 	$result = mysqli_query($conn,$sql);
				 while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				 	if($user==$row["username"] && $pword==$row["password"]){
				 		echo "<h5 align='center'> Login successful</h5>";
				 		//header('location: production.php');
				 	}
				 	else{
				 		echo "<h5 align='center'>Login Unsuccessful\n Wrong username or password</h5>";

				 	}
				 
		$conn->close();
		}  
	}
		?>





