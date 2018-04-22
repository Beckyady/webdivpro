<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup</title>
<link href="signincss.css" rel="stylesheet" type="text/css" />

<style type="text/css">
a:link {
	color: #009;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #009;
}
a:hover {
	text-decoration: none;
	color: #009;
}
a:active {
	text-decoration: none;
	color: #009;
}
</style>

</head>
<body bgcolor="#CCCCCC">


<div class="first"><font size="+2"> Sign up</font><p>

<div class="face"></div>


<div class="gmail"></div>
<div class="sec"><img src="image/rule.jpg" width="410" height="13" /><p/>
<form action="register.php" method="post">
<input name="title" type="radio" value="mrs" />Mrs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="title" type="radio" value="miss" />Miss &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="title" type="radio" value="mr" />Mr &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p>
<table width="263" border="0" cellpadding="4">
  <tr>
    <td width="113" height="35"> 
     <input style="margin-top:-15px;" name="fname" type="text" size="21" class="enquiry" hspace="5px" placeholder="First Name"/></td>
     
     <td width="135">
    <input name="lname" style="margin-top:-15px; margin-left:70px;" type="text" size="21" class="enquiry" hspace="7px" placeholder="Last Name"/></td>
  </tr>
  <tr>
    <td colspan="2">
    <input name="email" style="margin-top:-15px" type="email" size="50" class="enquiry" hspace="5px" placeholder="Email Address"/></td>
    </tr>
  <tr>
    <td colspan="2">
    <input name="pnumber" style="margin-top:-15px" type="tel" size="50" class="enquiry" hspace="5px" placeholder="Phone Number"/></td>
    </tr>
  <tr>
    <td colspan="2">
    <input name="password" style="margin-top:-15px" type="password" size="50" class="enquiry" hspace="5px" placeholder="Password"/></td>
    </tr>
  <tr>
    <td colspan="2">
    <input name="cpassword" style="margin-top:-15px" type="password" size="50" class="enquiry" hspace="5px" placeholder="Confirm Password"/></td>
    </tr>
    
    
      <tr>
    <td colspan="2"  >
    <input name="reset" type="submit"  style="margin-top:-15px"  value="Sign me up" />
    </td>
    </tr>
</table> 
</form>
 <input name="checkbox" type="Checkbox" value="" />By clicking here you have accepted our<font color="#0000CC"><a href=""><b> Terms and Conditions</b></a></font> and our <font color="#0000CC"><a href=""><b>Privacy Policy</b></a></font>
</div>
</div>
<p>
<h5 align="center">Already have an account? <a href="login.php"><u>Log in</u></a></h5>

</body>
</html>