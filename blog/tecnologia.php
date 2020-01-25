<?php 
$db = mysqli_connect("localhost","root","root","DevMaze");
if($db->connect_error){
    die("La Conexion Fallo: ".$db->connect_error);
}
    if(isset($_GET['ID'])){
        $ID = mysqli_real_escape_string($db, $_GET['ID']);
        $T = mysqli_real_escape_string($db, $_GET['titulo']);

    $sql = "SELECT * FROM contenido WHERE id_contenido = $ID ";
    $result = mysqli_query($db, $sql) or die("Error en Query: $sql". mysqli_error());
    $row = mysqli_fetch_array($result);

} else{
    header('Location:tech_content.php');
}
?>

<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Tecnología</title>
    <style>
        .space{
            margin: 7% 0;
        }
    </style>
</head>
<body>

<?php include_once('blog_nav.php')?>

        <section class="container">
            <br>
            <h3 class="col-12"><?php echo $row['titulo']?></h3>
            <br>
            <p class="col-8"><?php echo $row['articulo']?></p>
        </section>
    
</body>
<div class="space"></div>
<?php include_once('../footer.php')?>
</html>