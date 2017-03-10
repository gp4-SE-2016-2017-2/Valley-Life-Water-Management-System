<!DOCTYPE html>
<html>
<body>
	<form action="" method="Post" autocomplete="off" oninput="">
		<fieldset>
			<legend>Add Delivery</legend>
			<input id="inp" type="text" name="customer" Placeholder="Customer"><br>
			<input id="inp" type="text" name="Num_bags" Placeholder="Number of bags" required=""><br>
			<input id="inp" type="text" name="spoilage" Placeholder="Spoilage"><br>
			Date: <input id="inp" type="date" value="delDate" name="delivDate" required=""><br>
			<input id="inp" type="submit" value="Submit" name="sub">
		</fieldset> 
	</form> <!--End of form -->
</body>
</html>
<?php
require ("testmysql.php");
	if(isset($_POST["sub"])){
	$cust = $_POST['customer'];	
	$num_of_bags= $_POST['Num_bags'];
	$spoil=$_POST['spoilage'];
	$date= $_POST['delivDate'];
	$sql = "INSERT INTO deliveriestb(`Customer`,`NumOfBags`,`Spoilage`, `Date`) VALUES('$cust','$num_of_bags','$spoil', '$date') ";
	if(mysqli_query($conn,$sql)){
		echo "Data insertion successful.";
	}
	else{echo "Error!!";}
	$conn->close();
}
?>
