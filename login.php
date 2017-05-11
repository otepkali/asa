<?php
require "db.php";
$data=$_POST;
if(isset($data['do_login'])) {
	$errors = Array();
	$user = R::findOne('users', 'login=?', array($data['login']));
if ($user) {
	if (password_verify($data['password'], $user ->password)){
 echo "test";
	}else {
	$errors[]='Не правильно введен пароль';
	}
	 }
		else {
			$errors[]='Пользователь с таким логином не найден';
		}
		if ( ! empty($errors)) {
		
	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		
	}
}
?>
-<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Lesson Plan Maker</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="description" content="Make your own lesson plan in seconds and keep them coming.  An easy way to do it." />
<link rel="Shortcut Icon" href="innovation.ico" type="image/x-icon" />
<link href="http://www.teach-nology.com/css/Teachnology.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body id="SubPage">
<div id="Wrapper">
<div id="Header">
<img src="nis_logo.jpg" alt="Mountain View" style="width:150px;height:170px;">
<div id="HeaderRgt">

</div>
<div id="TopNav">
<ul>

<li><a href="/Website/login.php">Registration</a></li>
<li><a href="/Website/signup.php">Authorisationn</a></li>
<li><a href="/Website/fan.php">Lesson plan creator</a></li>
<li><a href="/Website/about.php">About us</a></li>
<li><a href="/Website/activities.php">Activities</a></li>


</ul>
</div>
</div>

<h3>Registration</h3>
<div align="center">
<img src="registration.png" style="width:150px;height:170px;">
<form action="/Website/login.php" method="POSt">
<p>
	<p><strong>Ваш логин</strong></p>
		<input type="text" name="login" >
	</p>
	<p><strong>Ваш Password</strong></p>
		<input type="password" name="password"  >
		
	</p>
<p>
<p>
		<button type="submit" name="do_login">login</button>
	</p>
	
	</form></div>
</div>
</div>
</td>
</tr>
</table>
</form>
<p>&nbsp;</p>
</div>
</div>
<div id="FooterTop">


</div>
<div id="Footer">2017 <a href="fan.php">Online lesson plan creator 
<p id="NavFooter"><a href="about.php">About Us</a> 

</div>
</body>
</html>
