<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Student Registration</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="list" method="POST" >
  @csrf 
  <div class="form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>    
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" name="status">
      <option>Active</option>
      <option>In Active</option>
    </select>
  </div>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Class</label>
    <select class="form-control" name="class">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <br>
  <h4>Gender</h4>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
  <h4>Subjects</h4>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="subject" id="inlineCheckbox1" value="hindi">
  <label class="form-check-label" for="inlineCheckbox1">Hindi</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="subject" id="inlineCheckbox2" value="english">
  <label class="form-check-label" for="inlineCheckbox2">English</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="subject" id="inlineCheckbox3" value="maths" >
  <label class="form-check-label" for="inlineCheckbox3">Maths</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="subject" id="inlineCheckbox4" value="science" >
  <label class="form-check-label" for="inlineCheckbox4">Science</label>
</div>
<br>
  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>