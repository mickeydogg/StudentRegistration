<h1>Students Registration</h1>
<table border='1'>
<tr> 
<td>id</td>
<td>name</td>
<td>email</td>
<td>mobile</td>
<td>status</td>
<td>class</td>
<td>gender</td>
<td>subject</td>
<td>operation</td>
</tr>
@foreach($StudentDetails as $StudentDetail)
<tr>
<td>{{$StudentDetail['id']}}</td>
<td>{{$StudentDetail['name']}}</td>
<td>{{$StudentDetail['email']}}</td>
<td>{{$StudentDetail['mobile']}}</td>
<td>{{$StudentDetail['status']}}</td>
<td>{{$StudentDetail['class']}}</td>
<td>{{$StudentDetail['gender']}}</td>
<td>{{$StudentDetail['subject']}}</td>
<td><a href={{"delete/".$StudentDetail['id']}}>Delete</a>
</td>
</tr>
@endforeach

</table>
<a href="add">Not Registered? register now!</a>
