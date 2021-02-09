<h1>Student Detail Updation</h1>
<form action="/edit" method="POST" style="margin-left: 220px;
    margin-right: 1016px;">
@csrf
<input type="hidden" name="id" value= {{$data['id']}} >
<label for="exampleInputEmail1">Name</label>
<input type="text" name="name" value="{{$data['name']}}"><br><br>
<label for="exampleInputEmail1">Email address</label>
<input type="text" name="email" value="{{$data['email']}}"><br><br>
<label for="exampleInputEmail1">Mobile</label>
<input type="text" name="mobile" value="{{$data['mobile']}}"><br><br>
<label for="exampleInputEmail1">Status</label>
<input type="text" name="status" value="{{$data['status']}}"><br><br>
<label for="exampleInputEmail1">Class</label>
<input type="text" name="class" value="{{$data['class']}}"><br><br>
<label for="exampleInputEmail1">Gender</label>
<input type="text" name="gender" value="{{$data['gender']}}"><br><br>
<label for="exampleInputEmail1">Subject</label>
<input type="text" name="subject" value="{{$data['subject']}}"><br><br>
<button type="submit">Update</button> 
</form>