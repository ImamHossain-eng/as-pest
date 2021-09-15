@extends('layouts.admin')
@section('content')
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Sub-Title</th>
                    <th>Image</th>
                    <th>Inserted</th>
                    <th>Updated</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sliders as $key => $slider)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$slider->title}} </td>
                    <td> {{$slider->sub_title}} </td>
                    <td>
                        <img src="{{asset('images/slider/'.$slider->image)}}" alt="{{$slider->image}}" style="width:200px">
                         
                    </td>
                    <td> {{ date('F d, Y', strtotime($slider->created_at))}} at {{ date('g:ia', strtotime($slider->created_at))}} </td>
                    <td> {{ date('F d, Y', strtotime($slider->updated_at))}} at {{ date('g:ia', strtotime($slider->updated_at))}} </td>                    
                    <td>
                        <a href="/admin/slider/{{$slider->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>

                        {{Form::open(['route' => ['admin.slider_destroy', $slider->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
                            <button class="btn btn-danger" style="display:inline;">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}
                    </td>
                </tr>

                @empty 
                <tr class="text-center">
                    <td colspan="7"><strong>No Data</strong></td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</body>

@endsection