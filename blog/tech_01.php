<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Blog</title>
</head>
<body>
<?php include_once('blog_nav.php') ?>

<?php 
 $db = mysqli_connect("localhost","root","root","DevMaze");
 if($db->connect_error){
     die("La Conexion Fallo: ".$db->connect_error);
 }
     $sql = "SELECT * FROM contenido WHERE seccion = 'tech'";
     $result = mysqli_query($db, $sql);
     while ($row = mysqli_fetch_array($result)){
         echo "</br>
              <section class='container'>";
            echo "<div>";
                echo "<h3 class='col-12'>".$row['titulo']."</h3>";
                echo "</br>";
                echo "<p class='col-8'>".$row['articulo']."</p>";
            echo "</div>";
         echo "</section>";
     }
     if($row->connect_error){
        die("La Conexion Fallo: ".$row->connect_error);
     }   
?>
</body>
</html>