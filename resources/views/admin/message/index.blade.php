@extends('layouts.admin')

@section('content')
<head>
   <style>
       .pagination li a{
			font-family: tahoma;
			padding-left:30px;
			padding-right:10px;
			text-align: center;
			margin:auto;
		}
   </style>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Received At</th>
                    <th>Seen </th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $key => $contact)
                <tr @if($contact->notify == false)
                    style="border-bottom:2px solid #C90910;"
                    @endif>
                    <td > {{$key+1}} </td>
                    <td> {{$contact->name}} </td>
                    <td> {{$contact->email}} </td>
                    <td> {{$contact->mobile}} </td>
                    <td> {{ date('F d, Y', strtotime($contact->created_at))}} at {{ date('g:ia', strtotime($contact->created_at))}} </td>
                    <td>
                        @if($contact->notify == false)
                            New
                        @else 
                        {{ date('F d, Y', strtotime($contact->updated_at))}} at {{ date('g:ia', strtotime($contact->updated_at))}}

                        @endif
                    </td>
                    
                    <td>
                        <a href="/admin/message/{{$contact->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>                        
                    </td>
                </tr>

                @empty 
                <tr class="text-center">
                    <td colspan="5"><strong>No Data</strong></td>
                </tr>

                @endforelse
            </tbody>
        </table>
        <center>{{$contacts->links()}}</center>
    </div>
</body>
@endsection