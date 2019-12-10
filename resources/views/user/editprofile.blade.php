<html>
<head>
<title>Register</title>
</head>
<body>

<form method="post">
    @csrf
  <div>
  <h1>Welcome {{$std['userName']}}</h1>
    
    <h1>Edit your profile from here</h1>

    <table border="0">
        <tr>
          <td>UserId</td>
          <td>{{$std['id']}}</td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname" value="{{$std['userName']}}"></td>
        </tr>
        <tr>
          <td>DOB</td>
          <td><input type="Date" name="dob" value="{{$std['DOB']}}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="{{$std['email']}}"></td>
          </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="save" value="Save"></td>
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
