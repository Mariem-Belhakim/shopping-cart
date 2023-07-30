<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add product</title>

    <style>
      body{
        background: #1690A7;
      }
      button{
    float: right;
    background: #555 ;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}
button:hover{
    opacity:.7;
}
    </style>
</head>
<body>
    <?php include("nav.php"); ?>
    <div class="container my-5">

    <h1 class="text-light">Ajouter un produit</h1>
    <!-- <-- <input type="name" placeholder="product name"> <br>
    <input type="number" placeholder="product price"> <br>
   
    <input type="number" placeholder="Old price">
    </div> --> 

    <form method="POST" action="insert.php">
  <div class="mb-3">
    <label class="form-label ">Product name</label>
    <input type="name" name="produit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" name="prix" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="text" name="img" class="form-control" id="exampleInputPassword1">
  </div>
  
 
 
  <!-- <div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  <!-- </div> -->
  <div class="d-grid gap-2">
  <button type="submit">Submit</button>
  </div>
</form>
</div>
</body>
</html>