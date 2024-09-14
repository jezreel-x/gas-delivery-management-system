
<?php
/*

if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	// $message = strip_tags($_POST['message']);
	echo "<strong>Name</strong>: ".$name."</br>";
	echo "<strong>Email</strong>: ".$email."</br>";
	// echo "<strong>Message</strong>: ".$message."</br>";
	echo "<span class='label label-info'>Contact form has been submitted with above details!</span>";	
}
?>
*/


if (isset($_POST['id_number'])) {
	$name = strip_tags($_POST['id_number']);
	$email = strip_tags($_POST['phone_number']);
	// $message = strip_tags($_POST['message']);
	echo "<strong>Name</strong>: ".$name."</br>";
	echo "<strong>Email</strong>: ".$email."</br>";
	// echo "<strong>Message</strong>: ".$message."</br>";
	echo "<span class='label label-info'>Contact form has been submitted with above details!</span>";	
}
?>

