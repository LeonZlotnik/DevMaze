<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecnología...</title>
    <style>
        .space{
            margin: 7% 0;
        }
    </style>
    <link rel="stylesheet" href="css/content.css">
    <script src="https://github.jspm.io/jmcriffey/bower-traceur-runtime@0.0.87/traceur-runtime.js"></script>
</head>
<body>
    <?php include_once('navbar.php') ?>

    <section>
            <img src="img/High_tech.gif" alt=""  width="100%" height="350vh">

  
        <h3 class="content-title">Que hay de nuevo con la tecnología</h3>
        <br>
        <br>
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <input onkeyup="filter();" type="text" class="form-control" id="search" placeholder="Buscar...">
            </div>
        </form>

        <?php 
        $db = mysqli_connect("localhost","root","root","DevMaze");
        if($db->connect_error){
            die("La Conexion Fallo: ".$db->connect_error);
        }
        $sql = "SELECT * FROM contenido WHERE seccion = 'tech'";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)){
         ?>
         <div class="container-fluid">
        <br>
            <div class="card col-8">
         
                <div class="card-body" id="article-box">
                    <h5 class="card-title" id="title"><?php echo $row['titulo']?></h5>
                    <p class="card-text">Dejate asombrer por lo más nuevo en tecnología y aprende como aplicarlo, Lee la siguiente nota.</p>
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

<script>
    /*const searchBar=document.forms['search-bar'].querySelector('input');
    searchBar.addEventListener('keyup', function(e){
        const term = e.target.value.toLowerCase();
        console.log('term');
        const articles = document.getElementById('art-title');
        Array.form(articles).forEach(function(article){
            const title = article.firstElementChild.textContent;
            if(title.toLowerCase().indexOf(term)!= -1){
                book.style.display = "block";
            }else{
                book.style.display = "none";
            }
        });
    });*/

    function filter(){

        var box = document.getElementById('search');
        var term = box.value.toLowerCase();
        var ul = document.getElementById('article-box');
        console.log(term);

        for(i=0; i<ul.lenght; i++){
            var h = ul[i].getElementByTagName('h5').textContent;
            console.log(h);
            if(h.innerHTML.toLowerCase().indexOf(term)> -1){
                ul[i].style.display = "block";
            }else{
                ul[i].style.display = "none";
            };
        };
    };

    </script>