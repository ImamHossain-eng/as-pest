@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="title">All Users</h3>
        </div>
        <div class="card-body">
            <table class="table table-border table-hover">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $key => $user)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$user->name}} </td>
                            <td> {{$user->email}} </td>
                            <td> @if($user->role_id != null) {{$user->role->name}} @else Unknown @endif</td>
                            <td> {{$user->created_at->diffForHumans()}} </td>
                            <td>
                                <a href="#" class="btn btn-success" title="Edit this user">
                                    <i class="fa fa-check"></i>
                                </a>
                            </td>
                        </tr>
                    @empty 
                        <tr class="text-center">
                            <td colspan="6">No Users Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection