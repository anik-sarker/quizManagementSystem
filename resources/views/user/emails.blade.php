<!DOCTYPE html>
<html>
<head>
	<title>Emails</title>
</head>
<body>
    @csrf
    <h1>>All of your emails are showed in the following table</h1>
    <table border="2">
      <tr>
        <td>From</td>
        <td>Massage</td>
      </tr>
@foreach($emails as $key => $data)
    <tr>    
      <th>{{$data->teacherEmail}}</th>
      <th>{{$data->messageBody}}</th>                
    </tr>
@endforeach   
    </table>
  <h1>>Send your emails from here</h1>
    <form method ="post">
      @csrf
        <table border="2">
            <tr>
              <td>TO</td>
              <td>Massage</td>
            </tr>  
            <tr>
                <td><input type ="text" name="to" placeholder="Teachers email"></td>
                <td><input type ="text" name="body" placeholder="Your massege here"></td>
            </tr>  
          </table>
          <input type="submit" value="Send">
    </form>

</body>
</html>