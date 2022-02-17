@extends('layouts.admin')
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard: {{ $chart->options['chart_title'] }}</div>
    
                    
                    <div class="card-body">
    
                        <h1>{{ $chart->options['chart_title'] }}</h1>
                        {!! $chart->renderHtml() !!}
    
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('javascript')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
    
    @endsection
</body>
@endsection