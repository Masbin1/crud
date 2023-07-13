<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- datatable -->
    @vite('resources/css/app.css')
    <title>Users</title>
</head>

<body>
{{-- container --}}
    <div class="container mx-auto">
    </div>
<canvas id="myChart" height="100px"></canvas>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

    var iot =  {{ Js::from($iot) }};
    var humidity =  {{ Js::from($humidity) }};
    var temperature =  {{ Js::from($temperature) }};
    var nilai =  {{ Js::from($nilai) }};
    var labels = {{ Js::from($labels)}};

    console.log(humidity);
    console.log(labels);
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Humidity',
                backgroundColor: 'rgb(0,207,255)',
                borderColor: 'rgb(0,207,255)',
                data: humidity
            },
            {
                label: 'Temperature',
                backgroundColor: 'rgb(255,63,0)',
                borderColor: 'rgb(255,63,0)',
                data: temperature
            },
            {
                label: 'Nilai',
                backgroundColor: 'rgb(139,253,0)',
                borderColor: 'rgb(139,253,0)',
                data: nilai
            },
        ]
    };

    const config = {
        type: 'line',
        data: data,
        options: {

        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>

</html>
