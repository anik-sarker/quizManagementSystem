<html>
<head>
<title>Register</title>
</head>
<body>

<form method="post">
    @csrf
  <div>
    <h1>Sign Up</h1>
    <p>Please fill up this form to create an account.</p>
  
  <p>Your user id would be:<strong> {{$lastId}} </strong></p>
    <label ><b>User name</b></label>
    <input type="text" placeholder="Enter First name" name="uname" required>
	<hr>
    <label ><b>Date of birth</b></label>
    <input type="date" name="dob" required>
	<hr>
    <label ><b>Gender :</b></label>
    <input type="radio" value="Male" name="gender" required="required"/><b>Male</b>
	  <input type="radio" value="Female" name="gender"/><b>Female</b>
    <input type="radio" value="Other" name="gender"/><b>Other</b>
  <hr>
  <label ><b>You are a :</b></label>
  <input type="radio" value="teacher" name="userType" required="required"/><b>Teacher</b>
  <input type="radio" value="student" name="userType"/><b>Student</b>
	<hr>	
    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <hr>
    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <hr>
    <label ><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_confirmation" required>
    <hr>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div >
      <button name="Submit" type="submit">Sign Up</button>
	  <a href="/login">Already a member?</a>
	</div>
  </div>
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
