<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location: login.php"); exit();
    }

    if(isset($_GET['logout']))
    {
        unset($_SESSION['user']);
        header("location: login.php"); exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Login || Adrian</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color: #C47AFF">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./Logo.png" style="height: 50px; width: auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <span class="navbar-text">
      <header>
            <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
            <a href="?logout">Log Out</a>
        </header>
      </span>
    </div>
  </div>
</nav>
    <!-- Navbar End -->

    <!-- Landing page -->
    <div class="landing-page">
        <div class="landing-left">
            <p class="landing-title"> What are we ? </p>
            <p class="landing-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse doloremque nisi ea, aperiam et corporis veniam rerum. Quasi laboriosam doloremque inventore ipsa explicabo. Quod, distinctio? Qui, alias magni? Magni, harum?   </p> 
        </div>

        <div class="landing-right">
            <a><img src="./37130.jpg" style="height: 360px; width: auto; border-radius: 5px;margin:71px 8px"></a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>