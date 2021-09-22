@include('layouts.app')
<div class="container-fluid">
        <div class="row d-flex justify-content-center">
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