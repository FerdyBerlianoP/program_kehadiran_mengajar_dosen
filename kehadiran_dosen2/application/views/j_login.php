<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
</head>
<body>
	<h1>Selamat datang</h1>
	<form action="<?php echo base_url('index.php/loginmahasiswa/aksi_login2'); ?>" method="post">		
		<table>
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>