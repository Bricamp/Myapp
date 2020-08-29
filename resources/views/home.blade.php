@extends('layout/layout')


<!DOCTYPE html>
<html>
    <head>
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
            alert(msg);
            }

        </script>



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>

    </head>

    <body>
        <div class="contenedor">
            @include('partial/menu-nav')
            <h1>Bienvenidos al Blog!</h1>
            <div class="contenedor child-contenedor">
                <div id="chartContainer" style="height: 350px; width: 95%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>
        </div>
    </body>

</html>

<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        //theme: "light2",
        title:{
            text: "Numero de visitas"
        },
        axisX:{
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY:{
            title: "",
            includeZero: true,
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        toolTip:{
            enabled: false
        },
        data: [{
            type: "area",
            dataPoints: <?php echo json_encode(
                        array(
                        array("label"=> $visitantes->created_at->format('Y-m-d'), "y"=> $visitantes->visitas )
                        ),
                        JSON_HEX_TAG);
                        ?>
            }]
    });
    chart.render();

    }
</script>
