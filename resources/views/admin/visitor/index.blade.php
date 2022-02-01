@extends('layouts.admin')
@section('content')
    <strong>Total Visitors: </strong> {{Visitor::count()}}
    <strong>Today Visit: </strong> {{Visitor::where('created_at', '>=', Carbon\Carbon::today()->toDateString())->count()}}
    <div class="card">
        <div class="card-header">
            <h3 class="title">Unique Visitors Counter</h3>
        </div>
        <div class="card-body">
            <table class="table table-dark table-border table-striped">
                <thead>
                    <tr>
                        <th><h6>Serial</h6></th>
                        <th><h6>DB ID</h6></th>
                        <th><h6>IP Address</h6></th>
                        <th><h6>Visited</h6></th>
                        <th><h6>Visited At</h6></th>
                        <th><h6>Option</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($visitors as $key => $visitor)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$visitor->id}} </td>
                            <td> {{$visitor->ip}} </td>
                            <td> {{$visitor->created_at->diffForHumans()}} </td>
                            <td> {{date('F d, Y', strtotime($visitor->created_at))}} at {{date('g:ia', strtotime($visitor->created_at))}}</td>
                            <td>
                                {{Form::open(['route'=>['admin.visitor_destroy', $visitor->id], 'method'=>'DELETE', 'style'=>'display:inline'])}}
                                    <button type="sunmit" class="btn btn-danger" title="Delete this record">
                                        <i class="fa-fa-trash">X</i>
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
            {{$visitors->links()}}
        </div>
    </div>
@endsection