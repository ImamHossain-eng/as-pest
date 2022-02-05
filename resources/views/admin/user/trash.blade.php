@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="title">All Removed Users</h3>
        </div>
        <div class="card-body">
            <table class="table table-border table-hover">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Deleted at</th>
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
                            <td> {{$user->deleted_at->diffForHumans()}} </td>
                            <td>
                                <a href="/admin/user/{{$user->id}}/restore" class="btn btn-warning" title="Restore this user">
                                    <i class="fa fa-recycle"></i>
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