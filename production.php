<!DOCTYPE html>
<html>
<body>
	<form action="" method="Post" autocomplete="off" oninput="">
		<fieldset>
			<legend>Add Production</legend>
			<input id="inp" type="text" name="Num_bags" Placeholder="Number of bags" required=""><br>
			<input id="inp" type="text" name="spoilage" Placeholder="Spoilage"><br>
			Date: <input id="inp" type="date" value="pDate" name="prodDate" required=""><br>
			<input id="inp" type="submit" value="Submit" name="sub">
		</fieldset>
	</form>
</body>
</html>
<?php
require ("testmysql.php");
	if(isset($_POST["sub"])){
	$num_of_bags= $_POST['Num_bags'];
	$spoil=$_POST['spoilage'];
	$date= $_POST['prodDate'];
	$sql = "INSERT INTO productiontb(`NumOfBags`,`Spoilage`, `Date`) VALUES('$num_of_bags','$spoil', '$date') ";
	if(mysqli_query($conn,$sql)){
		echo "Data insertion successful.";
	}
	else{echo "Error!!";}
	$conn->close();
}
?>