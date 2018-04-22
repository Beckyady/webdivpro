<?php
$email = $_POST["email"];
$password = $_POST["password"];
if (isset($_POST['Reset'])){
	
$con = mysql_connect('localhost','root','');
$check = mysql_select_db('rebe',$con);


	$sel = mysql_query("SELECT * FROM demo WHERE email = '$email'AND password='$password'");
$data = mysql_fetch_array( $sel);
if ($data>0){
	
	echo "Welcome to your account";
	}
} 
 

?>