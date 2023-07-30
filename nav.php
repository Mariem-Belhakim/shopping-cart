



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart shopping</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
  
<?php session_start()?>


<nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#">BEMA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Accuiel<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./admin.php">Admin<span class="sr-only"></span></a>
      </li>
      <?php
        if(isset($_SESSION["user_name"])){
          ?>
          <li class="nav-item active">
    <a class=" btn btn-primary nav-link" href="./login.php"><?= $_SESSION["user_name"]?></a>
      </li>
          <?php
        }else{
          ?>
<li class="nav-item active">
<a class=" btn btn-primary nav-link" href="./login.php">Log in</a>
</li>
<li class="nav-item active">
<a class=" btn btn-success nav-link" href="./register.php">Register</a>
</li>

          <?php
        }
      ?>

<li class="nav-item active">
<a class=" btn btn-light nav-link" href="./logout.php">Log out</a>
</li>
     
    </ul>
    
  </div>
</nav>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>