<div class="card-md-3">
    <div class="card-body">
        <h5 class="card-title text-center">All Students list</h5>
        <div class="table-responsive-md">
            <table class="table table-bordered table-striped text-center">
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
                        <td style="display: inline-flex;margin:3px"><a style="margin: 3px;" href="{{url('student/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{url('student/edit/'.$student->id)}}" style="margin: 3px;" class="btn btn-sm btn-success">Edit</a>
                            <a href="{{url('student/delete/'.$student->id)}}" style="margin: 3px;" class="btn btn-sm btn-info btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>