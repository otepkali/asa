

<?php if (isset($_SESSION['logged_user'])) :?>
	Авторизован
<?php else :?>
<a href="/Website/login.php">Авторизоваться</a>
<br>
<a href="/Website/signup.php">Регистрация</a>
<?php endif; ?>
 
<a href="/Website/fan.php">planning</a>