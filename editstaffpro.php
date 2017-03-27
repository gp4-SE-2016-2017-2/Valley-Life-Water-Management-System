<!DOCTYPE html>
<html>
<title> Edit Staff Profile</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

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
    
    h1{
    	color: blue;
    }

    h2{
    	color: red;
    }

    h5{
    	color: green;
    }
</style>
<body>
<h1 align="center">VALLEY LIFE WATER MANAGEMENT SYSTEM</h1>
<hr>

	
<h2 align="center">Edit Staff Profile</h2>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	
  	<form name="oj" method="post" action="production.php">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name </label>
    <input type="text" name="Num_bags" class="form-control" id="inp" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="inp" name="spoil" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="inp" name="date" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telephone Number</label>
    <input type="text" name="#" class="form-control" id="inp" placeholder="Tel No">
  </div>
  
  
  <button type="submit" class="btn btn-default" name="sub">Submit</button>
  <a class="btn btn-default" href="staffdashboard.php" role="button">Back</a>
</form>


  </div>
  <div class="col-md-4"></div>
</div>

	
</body>
</html>






	