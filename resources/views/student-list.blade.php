
<div class="card-md-3">
  <img src="/img/student-privacy4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">All Students lsit</h5>
    <p class="card-text">Powered by SBY Technocrates India</p>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Subject</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->subject}}</td>
            <td>{{$student->address}}</td>
            <td><a href="{{url('student/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
            <a href="{{url('student/edit/'.$student->id)}}" class="btn btn-sm btn-success">Edit</a>
            <a href="{{url('student/delete/'.$student->id)}}" class="btn btn-sm btn-info btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </div>
</div>
