<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>DevMaze</title>
    <style>
        .header-content h1{
            margin-top: 430px;
            text-shadow: 2px 2px #000000;
        }

        h3 {
            text-shadow: 2px 2px #000000;
        }

        p{
            text-shadow: 2px 2px #000000;
        }
    </style>
</head>
<body>
    <?php include_once('navbar.php') ?>

    <section class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="img/binary.mov" autoplay="true" loop="true"></video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
            <h1>Bienvenido a DevMaze</h1>
            <h3>El siguiente paso de tu negocio</h3>
            <br>
            <p>Desarrollamos y reinventamos, brindamos las soluciones más ingerales a los negocios más demandados. La eficiencia en tu negocio es el asertijo, nosotros la solución. </p>
            <a href="" class="btn btn-primary">Refresh</a>
        </div>
    </section>
</body>
</html>