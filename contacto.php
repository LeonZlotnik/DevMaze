<?php 

if(isset($_POST["insert"])){

$server = "localhost";
$user = "root";
$pword = "root";
$DBname = "DevMaze";

$name = $_POST['nombre'];
$mail = $_POST['email'];
$subject = $_POST['interes'];
$information = $_POST['info'];	

$connect = mysqli_connect($server,$user,$pword,$DBname) or die("error en conexion ".mysqli_connect_error());
mysqli_set_charset($connect, "utf8");

$query = "INSERT INTO devmaze_clientes (nombre, email, interes, info) VALUES ('$name','$mail','$subject','$information')";

$result = mysqli_query($connect,$query) or die ("error en query $query".mysqli_error());

if($result){
echo '<script type="text/javascript">
    alert("Tu información ha sido ingresada");
</script>';
}
else{
echo '<script type="text/javascript">
    alert("Ha ocuurido un error en la conexión, intente de nuevo!");
</script>';
}

mysqli_free_result($result);
mysqli_close($connect);

header("Location: index.php?dev=1");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <style>
        .space{
            margin: 7% 0;
        }
    </style>
</head>
<body>
    <?php include_once('navbar.php') ?>

    <section>
    <br>
    <div class="container">
        <h2 class="col-6">Deja tu información</h2>
    </div>
    <form action="" method="POST">
        <br>
        <div class="form-group container">
            <label for="exampleInputEmail1">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group container">
            <label for="exampleInputPassword1">Email:</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            <small id="emailHelp" class="form-text text-muted">Nunca compariremos tu mail con alguien más</small>
        </div>
        <div class="form-group container">
            <label for="exampleFormControlSelect1">Interes:</label>
            <select name="interes" class="form-control" id="exampleFormControlSelect1">
            <option value="null">--</option>
            <option value="servicios">Saber más de servicios</option>
            <option value="cotizacion">Cotización</option>
            <option value="assesment">Asesoramiento</option>
            <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group container">
            <label for="exampleFormControlTextarea1">Informacion adicional:</label>
            <textarea name="info" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group form-check container">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="container">
            <div class="row">
            <input type="submit" value="Enviar"  name="insert" class="col-2 btn btn-primary"/>
            </div>
        </div>
       
    </form>
    </section>
    <div class="space"></div>
    <?php include_once('footer.php')?>
</body>
</html>