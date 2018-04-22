<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link  href="logincss.css" rel="stylesheet" type="text/css" />

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


<div class="first">
    <font size="+2"> Please login to continue</font><p>
<div class="face" ><img src="image/social-facebook.png" height="40" width="50" style="background-color:#FFF" /></div>
<div class="gmail"></div>
<br>
<img src="image/rule.jpg" width="400" height="13" align="middle" />
<p>
<form method="post"  action="loginsolu.php">
<table width="401" border="0" cellpadding="4">
  

  <tr>
    <td colspan="2">
    <input name="email" type="text" size="59" class="enquiry" hspace="5px" placeholder="Phone Number OR Email Address"/></td>
    </tr>
  <tr>
    <td colspan="2">
    <input name="password" type="password" size="59" class="enquiry" hspace="5px" placeholder="Password" style="margin-top:-8px"/></td>
    </tr>
    <tr>
    <td align="right">
 <a href="#"> <u>Forgot Your Password?</u></a>
      </td>
      </tr>
      <tr>
    <td colspan="2"  >
    <input name="Reset" type="submit"   value="Log me in" />
    </td>
    </tr>
    
</tr>
</table>

</form>
  </div>
<h5 align="center">Dont have an account? <a href="Signup.php"><u>Sign up</u></a></h5>
</body>
</html>