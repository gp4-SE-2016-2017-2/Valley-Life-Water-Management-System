<!DOCTYPE html>
<html>
<head>
<title>VALLEY LIFE WATER FACTORY SYSTEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>VALLEY LIFE WATER FACTORY SYSTEM</h1>
<hr>
<hr>
<div class="main-agileits"> 
  <!--form-stars-here--><!--//form-ends-here--> 

<!-- copyright -->
<div class="copyright w3-agile">
  <p> © 2017 Valley Life Water System. All rights reserved | Designed by Group 4(Software Engineering)</p>
</div>
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
	<form action="" method="Post" autocomplete="off" oninput="">
		<fieldset>
			<legend>Sales</legend><br>
			Type <br>
			<input type="radio" name="type" value="IN-HOUSE">IN-HOUSE
			<input type="radio" name="type" value="DELIVERY">DELIVERY<br>
			<br><input id="inp" type="text" name="sale" Placeholder="Sale" required=""><br>
			<br><input id="inp" type="text" name="discount" Placeholder="Discount"><br>
			<br>Date: <input id="inp" type="date" value="saleDate" name="saleDate" required=""><br>
			<br><input id="inp" type="submit" value="Submit" name="sub">
		</fieldset>
	</form>

</body>
</html>
<?php
require ("testmysql.php");
	if(isset($_POST["sub"])){
	$type= $_POST['type'];
	$sale=$_POST['sale'];
	$date= $_POST['saleDate'];
	$disc=$_POST['discount'];
	$sql = "INSERT INTO sales(`type`,`saleDate`, `sale`,`discount`) VALUES('$type','$date', '$sale','$disc') ";
	if(mysqli_query($conn,$sql)){
		echo "Data insertion successful.";
	}
	else{echo "Error!!";}
	$conn->close();
}
?>