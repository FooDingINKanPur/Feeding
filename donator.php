<?php
// database connection code
$con = new mysqli("localhost","root","","demo");
// get the post records
$Name = $_POST['name'];
$Occup = $_POST['occupation'];
$Address = $_POST['address'];
$Addresstype = $_POST['addresstype'];
$Contact= $_POST['contact'];
$date= date('Y-m-d H:i:s');
// database insert SQL code
$sql = "INSERT INTO donator (name, occupation, address, addresstype, contact, currentdate) VALUES ('$Name', '$Occup', '$Address', '$Addresstype','$Contact','$date')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your Data is Submitted with updated time";
}

?>
