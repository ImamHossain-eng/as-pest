@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Adding New Team Member</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'admin.faq_store', 'method'=> 'POST'])}}
                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Name</span>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Designation</span>
                    <input type="text" name="designation" class="form-control" placeholder="Enter Designation of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Profile Picture</span>
                    <input type="file" name="image" class="form-control">
                </div>


                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Facebook Link</span>
                    <input type="text" name="fb" class="form-control" placeholder="Enter Facebook link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Twitter Link</span>
                    <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">LinkedIn Link</span>
                    <input type="text" name="linkedin" class="form-control" placeholder="Enter LinkedIn link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Instagram Link</span>
                    <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram link of the Employee">
                </div><br>

                <button class="btn btn-primary">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection