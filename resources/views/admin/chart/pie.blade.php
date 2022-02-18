@extends('layouts.admin')
@section('content')
<head>
    <script src="{{asset('js/admin/chart.js')}}"></script>
</head>
<body>
    <div class="card-body">
        <br>
        <canvas id="myChart" style="max-width: 90%; max-height: 70vh;"></canvas>
    </div>
    <script>

        const country = <?php echo $country; ?>;
        const total = <?php echo $total; ?>;

        
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

        const data = {
            labels: country,
            datasets: [{
                data: total,
                backgroundColor: bgColors,
                hoverOffset: 4
            }]
        };


        

        var ctx = document.getElementById("myChart")

        new Chart(ctx, {
            type: 'pie',
            data: data
        });

    </script>
</body>
@endsection