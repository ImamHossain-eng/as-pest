@extends('layouts.user')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Add Your Necessary Information</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'user.info_store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
            <div class="form-group">
                <input type="text" name="profession" class="form-control" placeholder="Enter Your Profession" required>
            </div><br>

            <div class="form-group">
                <input type="number" name="number" class="form-control" placeholder="Enter Your Contact Number" required>
            </div><br>

            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Enter Your address" required>
            </div><br>

            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div><br>

            <input type="submit" value="Save" class="btn btn-primary" style="width: 100%;">

            {{Form::close()}}
        </div>
    </div>
</body>
@endsection