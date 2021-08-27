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
                    <th>Question</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $key => $faq)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$faq->question}} </td>
                    <td> {{ date('F d, Y', strtotime($faq->created_at))}} at {{ date('g:ia', strtotime($faq->created_at))}} </td>
                    <td> {{ date('F d, Y', strtotime($faq->updated_at))}} at {{ date('g:ia', strtotime($faq->updated_at))}}  </td>
                    <td>
                        <a href="/admin/faq/{{$faq->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/admin/faq/{{$faq->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>

                        {{Form::open(['route' => ['admin.faq_destroy', $faq->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
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
        <center>{{$faqs->links()}}</center>
    </div>
</body>
@endsection