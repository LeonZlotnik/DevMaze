<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Servicios</title>
    <style>
        .space{
            margin: 64% 0;
        }
    </style>
</head>
<body>
<?php include_once('navbar.php') ?>
    <main class="container">
    <ul class="row">
        <li class="col-6 list">
            <div class="card mb-3 shadow">
            <img src="img/dev_pic.jpeg" class="card-img-top" alt="..." width="50%" height="200px;">
            <div class="card-body">
            <h5 class="card-title">Desarrollo de Apps</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>            
            <a href="servicios/Development.php" class="btn btn-primary">Conocer Más</a>
            </div>
        </li>
        <li class="col-6 list">
            <div class="card mb-3 shadow">
            <img src="img/data_science_pic.jpeg" class="card-img-top" alt="..." width="50%" height="200px;">
            <div class="card-body">
            <h5 class="card-title">Data Science</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="servicios/DataScience.php" class="btn btn-primary">Conocer Más</a>
            </div>
        </li>
        <li class="col-6 list">
            <div class="card mb-3 shadow">
            <img src="img/design_pic.png" class="card-img-top" alt="..." width="50%" height="200px;">
            <div class="card-body">
            <h5 class="card-title">Diseño</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="servicios/Diseno.php" class="btn btn-primary">Conocer Más</a>
            </div>
        </li>
        <li class="col-6 list">
            <div class="card mb-3 shadow">
            <img src="img/mkt_pic.jpeg" class="card-img-top" alt="..." width="50%" height="200px;">
            <div class="card-body">
            <h5 class="card-title">Marketing 360º</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="servicios/Marketing.php" class="btn btn-primary">Conocer Más</a>
            </div>
        </li>
    </ul>
    </main>
    <div class="space"></div>
    <?php include_once('footer.php')?>
</body>
</html>