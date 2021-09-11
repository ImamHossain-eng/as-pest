@extends('layouts.admin')
@section('content')
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>Inserted</th>
                    <th>Updated</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tests as $key => $test)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$test->name}} </td>
                    <td> {{$test->profession}} </td>
                    <td> {{ date('F d, Y', strtotime($test->created_at))}} at {{ date('g:ia', strtotime($test->created_at))}} </td>
                    <td> {{ date('F d, Y', strtotime($test->updated_at))}} at {{ date('g:ia', strtotime($test->updated_at))}} </td>                    
                    <td>
                        <a href="/admin/testimonial/{{$test->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/admin/testimonial/{{$test->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>
                        {{Form::open(['route' => ['admin.test_destroy', $test->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}

                        
                    </td>
                </tr>

                @empty 
                <tr class="text-center">
                    <td colspan="6"><strong>No Data</strong></td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</body>

@endsection