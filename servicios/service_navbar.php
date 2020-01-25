<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      .text-changer:hover{
        color: white;
      }
    </style>
<body>
<nav class="topbar navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="../index.php">
    <img src="../img/DevMaze_Final.png" alt="" width="60px" height="50px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-changer" href="../servicios.php" style="color: white;">Servicios</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../concepto.php" style="color: white;">Concepto</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../contacto.php" style="color: white;">Contacto</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opinión
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../tech_content.php">Tecnología</a>
          <a class="dropdown-item" href="../marketing_content.php">Marketing</a>
          <a class="dropdown-item" href="../entrepreneur_content.php">Emprendimiento</a>
        </div>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <a href="../login.php" class="btn btn-outline-success my-2 my-sm-0">Admin</a>
    </form>
</nav>
</body>
</html>