@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="title">
                Visitor Details for the IP of {{$visitor->ip}}
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-border table-light table-hover">
                <thead>
                    <tr>
                        <th>Visitor IP</th>
                        <th> {{$visitor->ip}} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Country</td>
                        <td>{{$visitor->country}}</td>
                    </tr>
                    <tr>
                        <td>Region</td>
                        <td>{{$visitor->region_name}}</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>{{$visitor->city}}</td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td>{{$visitor->zip}}</td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td>{{$visitor->lat}}</td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td>{{$visitor->lon}}</td>
                    </tr>
                    <tr>
                        <td>Time Zone</td>
                        <td>{{$visitor->timezone}}</td>
                    </tr>
                    <tr>
                        <td>Internet Service Provider</td>
                        <td>{{$visitor->isp}}</td>
                    </tr>
                    <tr>
                        <td>Visited</td>
                        <td>{{$visitor->created_at->diffForHumans()}}</td>
                    </tr>
                    <tr>
                        <td>Visited At</td>
                        <td>{{date('F d, Y', strtotime($visitor->created_at))}} at {{date('g:ia', strtotime($visitor->created_at))}}</td>
                    </tr>
                </tbody>
            </table>            
        </div>
        <div class="card-footer">
        
            {{Form::open(['route'=>['admin.visitor_destroy', $visitor->id], 'method'=>'DELETE', 'style'=>'float:center'])}}
                <button type="submit" title="Move to trash" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection