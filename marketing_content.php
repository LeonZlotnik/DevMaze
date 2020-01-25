<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketing...</title>
    <style>
        .space{
            margin: 7% 0;
        }
    </style>
    <link rel="stylesheet" href="css/content.css">
</head>
<body>
    <?php include_once('navbar.php') ?>

    <section>
            <img src="img/mkt_idea.gif" alt=""  width="100%" height="350vh">

  
        <h3 class="content-title">Que hay de nuevo con la tecnología</h3>
     

        <?php 
        $db = mysqli_connect("localhost","root","root","DevMaze");
        if($db->connect_error){
            die("La Conexion Fallo: ".$db->connect_error);
        }
        $sql = "SELECT * FROM contenido WHERE seccion = 'mkt'";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)){
         ?>
         <div class="container-fluid">
        <br>
            <div class="card col-8">
         
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['titulo']?></h5>
                    <p class="card-text">Descubre nota y conoce más sobre las ultimas tendencias en marketing.</p>
                    <?php  echo "<a href='blog/tecnologia.php?ID={$row['id_contenido']}&titulo={$row['titulo']}' class='btn btn-primary'>Ir a Nota</a>"; ?>
                </div>
            </div>
        </div>
            
        
         <?php
     }
        if($row->connect_error){
            die("La Conexion Fallo: ".$row->connect_error);
        }   
?>
    
    </section>
    <br>
</body>
<div class="space"></div>
<?php include_once('footer.php')?>
</html>