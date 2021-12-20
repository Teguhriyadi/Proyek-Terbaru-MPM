<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<form method="POST" action="{{ url('/kirim_login') }}">
		@csrf
		<table border="3" cellpadding="10" cellspacing="0">
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email" placeholder="Email">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit">
						Kirim
					</button>
				</td>
			</tr>
		</table>
	</form>
</center>


</body>
</html>