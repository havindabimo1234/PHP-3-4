<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action = "Praktikum.php" method="post"> 
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="https://classroom.google.com/u/1/h">kembali</a>
			</center>
		</form>
		
	</div>


</body>
</html>