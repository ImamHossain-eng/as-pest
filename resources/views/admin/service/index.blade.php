@extends('layouts.admin')
@section('content')
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Motto</th>
                    <th>Inserted</th>
                    <th>Updated</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $key => $service)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$service->name}} </td>
                    <td> {{$service->motto}} </td>
                    <td> {{ date('F d, Y', strtotime($service->created_at))}} at {{ date('g:ia', strtotime($service->created_at))}} </td>
                    <td> {{ date('F d, Y', strtotime($service->updated_at))}} at {{ date('g:ia', strtotime($service->updated_at))}} </td>                    
                    <td>
                        <a href="/admin/service/{{$service->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/admin/service/{{$service->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>

                        {{Form::open(['route' => ['admin.service_destroy', $service->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
                            <button class="btn btn-danger" style="display:inline;">
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