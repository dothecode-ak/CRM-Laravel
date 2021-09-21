<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="/img/favicon.jpg" type="image/x-icon">
    <title>SBYcc Data Mangement</title>
</head>

<body>

    @include('layouts/navbar')
    <p class="text-center" style="font-weight: bold;margin-top:10px">SBY Coaching Class Data System</p>
    @if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include ("student-list")
            </section>
            <section class="col-md-0"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include ("student-list")
            </section>
            <section class="col-md-3">
                <form action="{{url('/student/store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input required type="text" class="form-control" name="age" id="age" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                        <label for="class">Class</label>
                        <input required type="text" class="form-control" name="class" id="class" placeholder="Enter class">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input required type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input required type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                    </div>
                    <input required type="submit" class="btn btn-info" value="Save">
                    <input required type="submit" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include ("student-list")
                  </section>
                  <section class="col-md-6"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include ("student-list")
            </section>
            <section class="col-md-3">
                <form action="{{url('/student/update/'.$student->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" class="form-control" value="{{ $student->name }}" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required type="email" class="form-control" value="{{ $student->email }}" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input required type="text" class="form-control" value="{{ $student->age }}" name="age" id="age" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                        <label for="class">Class</label>
                        <input required type="text" class="form-control" value="{{ $student->class }}" name="class" id="class" placeholder="Enter class">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input required type="text" class="form-control" value="{{ $student->subject }}" name="subject" id="subject" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input required type="text" class="form-control" value="{{ $student->address }}" name="address" id="address" placeholder="Enter address">
                    </div>
                    <input required type="submit" class="btn btn-info" value="Update">
                    <input required type="submit" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>