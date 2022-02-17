@extends('layouts.admin')
@section('content')
<head>
    <script src="{{asset('js/admin/chart.js')}}"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            @if(json_decode($type) == 'bar')
                <a href="/admin/overview/line/7" class="btn btn-primary">See Line Chart</a>
            @elseif(json_decode($type) == 'line')
                <a href="/admin/overview/bar/7" class="btn btn-primary">See Bar Chart</a>
            @endif           
                
        </div>
        <div class="card-body">
            <br>
            <canvas id="myChart" style="max-width: 90%; max-height: 70vh;"></canvas>
        </div>
    </div>
    

    


    <script type="text/javascript">
    
        var date = <?php echo $date; ?>;
        var total = <?php echo $total; ?>;
        var type = <?php echo $type; ?>;
        
        
        var barChartData = {
            labels: date,
            datasets: [{
                label: 'Visitor',
                backgroundColor: "#5969FF",
                data: total
            }]
        };
        window.onload = function() {

            var ctx = document.getElementById("myChart").getContext("2d");

            window.myBar = new Chart(ctx, {
                type: type,
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#c1c1c1',
                            borderSkipped: 'bottom'
                        },
                    },
                    responsive: true,
                    title: {
                        display: false,
                        text: 'Visitors of last Week'
                    }
                }
            });
        };
        </script>
</body>
@endsection