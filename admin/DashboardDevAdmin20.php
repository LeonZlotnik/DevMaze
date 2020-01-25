<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevMaze Dashboard</title>
</head>
<body>
    <?php include_once('admin_nav.php')?>

    <section>

     <div class="container-fluid">
     <br>
     <div class="card col-8">
      
         <div class="card-body">
             <h5 class="card-title">Base de Datos</h5>
             <p class="card-text">Visualiza los datos de clientes potenciales y descubre sus intereses</p>
             <a href="datos.php" class="btn btn-primary">Acceder</a>
         </div>
     </div>
     <br>
     <div class="card col-8">
      
         <div class="card-body">
             <h5 class="card-title">Admin Contenido</h5>
             <p class="card-text">Gestiona el contenido del Blog de forma rapida y sencilla</p>
             <a href="publicador.php" class="btn btn-primary">Acceder</a>
         </div>
     </div>
     <br>
     <div class="card col-8">
        
         <div class="card-body">
             <h5 class="card-title">Estadisticas</h5>
             <p class="card-text">Obten insights importantes a traves del entendimiento de tendencias sobre clientes</p>
             <a href="graphs.php" class="btn btn-primary">Acceder</a>
         </div>
     </div>
 <br>
     </div>
    </section>
</body>
</html>