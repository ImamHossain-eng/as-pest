@extends('layouts.admin')
@section('content')
    <strong>Total Visitors: </strong> {{Visitor::count()}}
    <strong>Today Visits: </strong> {{Visitor::where('created_at', '>=', Carbon\Carbon::today()->toDateString())->count()}}
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3 class="title">Unique Visitors Counter</h3>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="/admin/visitor/today" class="btn btn-info" title="See today's Visitors">
                        <i class="fa fa-eye"> Today's Visit: {{Visitor::where('created_at', '>=', Carbon\Carbon::today()->toDateString())->count()}} </i>
                    </a>
                    <a href="/admin/visitor/trash" class="btn btn-danger" title="See Trashed Visitors">
                        <i class="fa fa-trash"> Today's Visit: {{Visitor::onlyTrashed()->count()}} </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-dark table-border table-striped">
                <thead>
                    <tr>
                        <th><h6>Serial</h6></th>
                        <th><h6>IP Address</h6></th>
                        <th><h6>Country</h6></th>
                        <th><h6>Region/State</h6></th>
                        <th><h6>City</h6></th>
                        <th><h6>Time Zone</h6></th>
                        <th><h6>ISP</h6></th>
                        <th><h6>Visited At</h6></th>
                        <th><h6>Option</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($visitors as $key => $visitor)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$visitor->ip}} </td>
                            <td> {{$visitor->country}} </td>
                            <td> {{$visitor->region_name}} </td>
                            <td> {{$visitor->city}} </td>
                            <td> {{$visitor->timezone}} </td>
                            <td> {{$visitor->isp}} </td>
                            <td> {{$visitor->created_at->diffForHumans()}} </td>
                            {{-- <td> {{date('F d, Y', strtotime($visitor->created_at))}} at {{date('g:ia', strtotime($visitor->created_at))}}</td> --}}
                            <td style="min-width: 150px;">
                                @if($visitor->deleted_at == null)
                                    <a href="/admin/visitor/{{$visitor->id}}" title="Show Details" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    {{Form::open(['route'=>['admin.visitor_destroy', $visitor->id], 'method'=>'DELETE', 'style'=>'display:inline'])}}
                                        <button type="sunmit" class="btn btn-danger" title="Delete this record">
                                            <i class="fa fa-trash"></i>
                                        </button>  
                                    {{Form::close()}}
                                @else 
                                    <a href="/admin/visitor/{{$visitor->id}}/restore"
                                        class="btn btn-warning"
                                        title="Restore this visitor" >
                                        <i class="fa fa-recycle"></i>
                                    </a>
                                @endif
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