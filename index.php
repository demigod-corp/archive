<html>
<head><title></title></head>
<body>

<!-- replace "http://google.com" with the page you want it to redirect to. -->
<!-- replace 'letmein' with the password you want -->

	<?php
	if (isset($_POST['password'])) {
		if($_POST['password'] == 'password') {

			header("Location: https://demigod-corp.github.com/influx/r9escAVjZUsiGpGJ.html");
			exit;

} else {

		echo "password incorrect";
		exit;

	}
}
?>

<!-- replace "password.php" with the name of the password page. you can just leave the filename the way it is. -->

<form action="index.php" method="POST">
	password: 
	<br />
	<input type="password" name="password" />
	<input type="submit" value="Submit" />
</form>

</body>
</html>