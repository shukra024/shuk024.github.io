<?php
	include_once'data.php';
if(isset($_POST['submit']))
{	 
	 $type = $_POST['type'];
	$informer_name = $_POST['informer_name'];
	$informer_username = $_POST['informer_username'];
	$nic = $_POST['nic'];
	$district = $_POST['district'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$file = $_POST['file'];
	$crime_date = $_POST['date'];
	$crime_description = $_POST['description'];

	 $sql = "INSERT INTO crime_report (type, informer_name, informer_username,nic, district, street, city,file,  crime_date, crime_description)
	 VALUES ( '$type ','$informer_name','$informer_username','$nic','$district','$street', '$city','$file', '$crime_date', '$crime_description')";
	 if (mysqli_query($conn, $sql)) 
	 {
		header("Location:./criminal_report.php?criminal_report=empty");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>



	

	