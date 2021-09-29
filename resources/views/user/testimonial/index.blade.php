@extends('layouts.user')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3>Your Testimonials List</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Inserted At</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $key => $test)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$test->user->name}} </td>
                            <td> {{$test->profession}} </td>
                            <td> {{$test->created_at}} </td>
                            <td> {{$test->show}} </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>


                    @empty 
                        <tr class="table-danger text-center">
                            <td colspan="6">No Data</td>
                        </tr>
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection