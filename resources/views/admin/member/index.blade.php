@extends('layouts.admin')
@section('content')
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Inserted</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $key => $member)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$member->name}} </td>
                    <td> {{$member->designation}} </td>
                    <td> {{ date('F d, Y', strtotime($member->created_at))}} at {{ date('g:ia', strtotime($member->created_at))}} </td>
                    
                    <td>
                        <a href="/admin/member/{{$member->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/admin/member/{{$member->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>

                        {{Form::open(['route' => ['admin.member_destroy', $member->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}
                    </td>
                </tr>

                @empty 
                <tr class="text-center">
                    <td colspan="5"><strong>No Data</strong></td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</body>

@endsection