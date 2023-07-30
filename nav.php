  
<?php session_start()?>
<style>
  .nav-link:hover{
    color:gray;
  }
</style>

<nav class="navbar navbar-expand-lg bg-dark" >
  <div class="container-fluid">

  <a class="navbar-brand" href="#">BEMA</a>
  <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Accuiel</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./admin.php">Admin</a>
      </li>
      <?php
        if(isset($_SESSION["user_name"])){
          ?>
          <li class="nav-item active">
             <a class="nav-link" href="./login.php"><?= $_SESSION["user_name"]?></a>
      </li>
          <?php
        }else{
          ?>
      <li class="nav-item active">
      <a class="nav-link" href="./login.php">Log in</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="./register.php">Register</a>
      </li>

          <?php
        }
      ?>

    <li class="nav-item active">
    <a class="nav-link" href="./logout.php">Log out</a>
    </li>
     
    </ul>
    
  </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>