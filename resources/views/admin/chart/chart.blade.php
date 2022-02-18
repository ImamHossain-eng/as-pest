@extends('layouts.admin')
@section('content')
<head>
    <script src="{{asset('js/admin/chart.js')}}"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            @if(json_decode($type) == 'bar')
                <a href="/admin/overview/line" class="btn btn-primary">See Line Chart</a>
                <a href="/admin/overview/pie" class="btn btn-success">See Pie Chart</a>
            @elseif(json_decode($type) == 'line')
                <a href="/admin/overview/bar" class="btn btn-warning">See Bar Chart</a>
                <a href="/admin/overview/pie" class="btn btn-success">See Pie Chart</a>
            @elseif(json_decode($type) == 'pie')
                <a href="/admin/overview/line" class="btn btn-primary">See Line Chart</a>
                <a href="/admin/overview/bar" class="btn btn-warning">See Bar Chart</a>
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


        var bgColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#079BFC",
            "#FF4069",
            "#FFC94A"
        ];
        
        
        var barChartData = {
            labels: date,
            datasets: [{
                label: 'Visitor',
                backgroundColor: bgColors,
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