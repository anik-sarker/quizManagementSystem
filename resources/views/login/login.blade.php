<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>LOGIN PAGE</h1>

	<form method="post">
		@csrf
		
		<table>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="userid"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="/reg"> Register </a></td>
			</tr>
		</table>
	</form>

	
</body>
@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
@endif
</html>