<?php

$user = $_POST['uname'];
$pass = $_POST['pass'];
$error = "";
$success = "";

if(isset($_POST['insert'])){
    if($user == "Maze Mann"){
        if($pass == "EsistM@ze2020"){
            $error = "";
            $success = "Bienvenido!";
            header("Location: admin/DashboardDevAdmin20.php");
        }
        else{
            $error = "<p class='alert alert-danger'>Ups!! acceso denegado... Intente de nuevo</p>";
            $success = "";
        }
    }
    else{
        $error = "<p class='alert alert-danger'>Ups!! acceso denegado... Intente de nuevo</p>";
        $success = "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php include_once('navbar.php') ?>

    <img class="container" src="" alt="">

    <form method="POST" class="container" autocomplete="off">
    <?php echo $error ?>
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1" class="h4">Nombre de Usuario</label>
        <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca nombre de usuario" require>
        <small id="emailHelp" class="form-text text-muted">Esta sección es para uso exclusívo de los administradores de DevMaze</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="h4">Contraseña</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Introduzca contraseña" require>
    </div>
    
    <input type="submit" name="insert" value="Entrar" class="btn btn-primary">
    </form>
</div>
<br>
<div class="space"></div>
<?php include_once('footer.php')?>
</body>
</html>