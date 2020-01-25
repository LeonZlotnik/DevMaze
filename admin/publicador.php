<?php 

if(isset($_POST['publish'])){

$server = "localhost";
$user = "root";
$pword = "root";
$DBname = "DevMaze";

$title = $_POST['titulo'];
$section = $_POST['seccion'];
$article = nl2br($_POST['articulo']);

$connect = mysqli_connect($server,$user,$pword,$DBname) or die("error en conexion ".mysqli_connect_error());
mysqli_set_charset($connect, "utf8");

$query = "INSERT INTO contenido (titulo, seccion, articulo) VALUES ('$title','$section','$article')";

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
    
    header("Location: DashboardDevAdmin20.php?cont=1");
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publicador</title>
</head>
<body>  
<?php include_once('admin_nav.php') ?>
<br>
<form class="container" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="exampleInputEmail1">Encabezado</label>
    <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Titulo">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">Sección
    <label for="exampleFormControlSelect1"></label>
    <select name="seccion" class="form-control" id="exampleFormControlSelect1">
      <option value="null">--</option>
      <option value="tech">Tecnología</option>
      <option value="mkt">Marketing</option>
      <option value="ent">Emprendimiento</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Articulo</label>
    <textarea name="articulo" class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
  </div>
  <a href="DashboardDevAdmin20.php" class="btn btn-primary">Atras</a>
  <input type="submit" name="publish" class="btn btn-primary" value="Publicar"/>
</form>
</body>
</html>