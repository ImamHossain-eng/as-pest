@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">
                All User Roles
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>DB ID</th>
                        <th>Role Name</th>
                        <th>Number of User</th>
                        <th>Created_at</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $key => $role)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$role->id}} </td>
                            <td> {{$role->name}} </td>
                            <td> {{$role->users->count()}} </td>
                            <td>{{date('F d, Y', strtotime($role->created_at))}} at {{date('g:ia', strtotime($role->created_at))}} </td>
                            <td>
                                <a href="/admin/role/{{$role->id}}/edit" title="Edit this role" class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                </a>
                            </td>
                        </tr>
                    @empty 
                        <tr class="text-center table-warning">
                            <td colspan="6">No User Role</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection