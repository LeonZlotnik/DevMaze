<?php 
     $connect = mysqli_connect("localhost","root","root","DevMaze");
     if($connect -> connect_erro){
         die("La Conexion Fallo: ".$conect-> connect_error);
     }

    // Gráfica 1
     $sql = "SELECT count(id), registro FROM devmaze_clientes GROUP BY registro";
     $result = mysqli_query($connect,$sql);
     $valorY = array(); //registros
     $valorX = array(); //fechas

     while($ver = mysqli_fetch_row($result)){
        $valorY[]=$ver[0];
        $valorX[]=$ver[1];
     }

     $datosX=json_encode($valorX);
     $datosY=json_encode($valorY);

     //Grágica 2
     $query = "SELECT count(id), interes FROM devmaze_clientes GROUP BY interes";
     $result = mysqli_query($connect,$query);
     $barrasY = array(); //clientes
     $barrasX = array(); //interes

     while($eje = mysqli_fetch_row($result)){
        $barrasY[]=$eje[0];
        $barrasX[]=$eje[1];
     }

     $dataX=json_encode($barrasX);
     $dataY=json_encode($barrasY);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <style>
        .back_button{
            width: 280px; 
            margin: 0 0 2% 40%;
        }
    </style>
</head>
<body>
    <?php include_once('admin_nav.php')?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary"> 
                <br>
                    <div class="text-center h2">Gráficas DevMaze</div>
                    <br>
                    <a href="DashboardDevAdmin20.php" class="btn btn-primary back_button">Dashboard</a>
                    <div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="graficaLineal"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="graficaBarra"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

    function crearCadenaBaras(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

var datosX = crearCadenaLineal('<?php echo $datosX ?>');
var datosY = crearCadenaLineal('<?php echo $datosY ?>');

    var trace1 = {
        x:datosX,
        y:datosY,
        type:'scatter'
    };

    var data = [trace1];

    Plotly.newPlot('graficaLineal',data);

var dataX = crearCadenaBaras('<?php echo $dataX ?>');
var dataY = crearCadenaBaras('<?php echo $dataY ?>');

    var bar_data = [
    {
        x:dataX,
        y:dataY,
        type:'bar'
    }
];

    Plotly.newPlot('graficaBarra',bar_data);
 </script>