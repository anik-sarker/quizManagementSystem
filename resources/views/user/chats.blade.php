<!DOCTYPE html>
<html>
<head>
	<title>All of your exam reports and marks are given in the following table</title>
</head>
<body>
    @csrf
    <h1>Welcome </h1>
    <table border="2">
        <tr>
            <td>Students Email</td>
            <td>Teacher Email</td>
            <td>Message  </td>
        </tr>
        <tr>
                <td>{{$allreports['id']}}</td>
                <td>{{$allreports['studentid']}}</td>
                <td>{{$all['teacherid']}}</td>

        </tr> 

    </table>

</body>
</html>