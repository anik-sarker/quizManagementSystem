<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
</head>
<body>
    @csrf
<h1>Welcome {{$std->userName}}</h1>
<p><a href="#">Home | </a><a href="/user/emails/{{$std->email}}"> Emails | </a><a href="/user/editprofile/{{$std->id}}"> Edit profile | </a><a href="/user/allReports/{{$std->id}}"> Exam Reports | </a><a href="/quiz/index/{{$std->id}}">Attend quizs </a></p>      
    
</body>
</html>