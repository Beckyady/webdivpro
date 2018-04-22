<?php

  $con = mysql_connect("localhost","root","");
  $db_found = mysql_select_db("rebe", $con);

   if(isset($_POST["reset"])){

  $title = $_POST['title'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pnumber = $_POST['pnumber'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  
  $insert ="INSERT INTO demo
  (title,fname,lname,email,pnumber,password,cpassword)VALUES
('$title','$fname','$lname','$email','$pnumber','$password','$cpassword')";
$result = mysql_query($insert);

if ($password == $cpassword){

  
  echo  "YOU ARE SUCCESSFULLY REGISTERED";
  }
  else {

  echo "Password are not matched";
  }
   }
  ?>