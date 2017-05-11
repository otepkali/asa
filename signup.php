<?php
require "db.php";
$data= $_POST;
if (isset($data['do_signup'])) {
	$errors =  array();
	if (trim($data['login'])=='') {
		$errors[] = 'Enter Login';
	}
	if (trim($data['email'])=='') {
		$errors[] = 'Enter email';
	}
	if ($data['password']=='') {
		$errors[] = 'Enter Password';
	}
	if (trim($data['password_2']) !=$data['password']) {
		$errors[] = 'Renter password';
	}
	if (R::count('users', "login = ?" , array($data['login']))>0) {
		$errors[] = 'Пользователь с такми логином существует';
	}
	if (R::count('users', "email = ?" , array($data['email']))>0) {
		$errors[] = 'Пользователь с такми emailom существует';
	}

	if (empty($errors)) {
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password =$data['password'];
		
		R::store($user);
		echo '<div style="color: green;">Вы успешно зарегистрированы</div><hr>';
	} else {
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
<li><a href="/Website/signup.php">Authorisation</a></li>
<li><a href="/Website/fan.php">Lesson plan creator</a></li>
<li><a href="/Website/about.php">About us</a></li>
<li><a href="/Website/activities.php">Activities</a></li>


</ul>
</div>
</div>

<h3>Authorisation</h3>
<div align="center">
<img src="das.jpg" style="width:110px;height:110px;">
<form action="/Website/signup.php" method="POSt">
	<p>
		<p><strong>Ваш логин</strong></p>
		<input type="text" name="login" >
	</p>
	<p>
		<p><strong>Ваш email</strong></p>
		<input type="email" name="email" >
	</p>
<p>
		<p><strong>Ваш Password</strong></p>
		<input type="password" name="password" >
	</p>
<p>
		<p><strong>Подтвердите пароль</strong></p>
		<input type="password" name="password_2">
	</p>
	<p>
		<button type="submit" name="do_signup">Signup</button>
	</p></form>
</div></div>
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

	



