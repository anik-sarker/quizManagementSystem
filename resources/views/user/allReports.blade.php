<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
</head>
<body>
    @csrf
    <p>All of your exam reports and marks are given in the following table.</p>
    <table border="2">
        <tr>
            <td>Report no</td>
            <td>Student ID</td>
            <td>Teacher ID</td>
            <td>Quiz no</td>
            <td>Quiz Title</td>
            <td>Quiz marks</td>
        </tr>
@foreach($allreports as $key => $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->studentId}}</th>
      <th>{{$data->teacherId}}</th>
      <th>{{$data->quizNo}}</th>
      <th>{{$data->quizTitle}}</th> 
      <th>{{$data->marks}}</th>                
    </tr>
@endforeach    
    </table>

</body>
</html>