<?php
// database connection code
$con = new mysqli("localhost","root","","demo");
// get the post records
$Name = $_POST['name'];
$Authority = $_POST['authority'];
$Address = $_POST['address'];
$Authoritytype = $_POST['authoritytype'];
$Contact= $_POST['contact'];
$date= date('Y-m-d H:i:s');
// database insert SQL code
$sql = "INSERT INTO receiver (name, authority, address, authoritytype, contact,currentdate) VALUES ('$Name', '$Authority', '$Address', '$Authoritytype','$Contact','$date')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your Request is Submitted and please see the donators list ";
}

?>
