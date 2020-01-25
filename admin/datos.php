<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de Datos</title>
    <style>
        .back_button{
            width: 280px; 
            margin: 0 0 2% 40%;
        }
    </style>
</head>
<body>
    <?php include_once('admin_nav.php')?>
    <br>
    <a href="DashboardDevAdmin20.php" class="btn btn-primary back_button">Dashboard</a>
    <br>
    <?php 
        $connect = mysqli_connect("localhost","root","root","DevMaze");
        if($connect -> connect_erro){
            die("La Conexion Fallo: ".$conect-> connect_error);
        }

        echo "<table class='table table-hover'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>Interes</th>
                            <th scope='col'>Información</th>
                            <th scope='col'>Registro</th>
                        </tr>
                    </thead>";

                    $sql = "SELECT * FROM devmaze_clientes";
                    $result = $connect-> query($sql);

                    if($result-> num_rows > 0) {
                    
                        while($row = mysqli_fetch_assoc($result)){
                            echo "
                            <tbody>
                            <th scope='row'>".$row["id"]."</th>
                            <td>".$row["nombre"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["interes"]."</td>
                            <td>".$row["info"]."</td>
                            <td>".$row["registro"]."</td>";
                }
                    echo "
                        </tbody>
                    </table>";
                }
                else {
                    echo "no hay resultados";
                }
    
                $connect-> close();
    
    ?>
</body>
</html>