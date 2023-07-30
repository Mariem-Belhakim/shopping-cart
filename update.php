<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
    <?php
      include("nav.php");
    $id=$_GET['id'];

    include_once('bd.php');
    $sql = "SELECT * FROM products where id=".$id;
    $result = $conn->query($sql);

    $row=$result->fetch_assoc();
    ?>


</div>
</nav>
    <div class="container my-5">
        <h1 class="text-info">Modifier un produit</h1>

    <form method="POST" action="modifier.php">
        <input type="hidden" name="id" value="<?=$id?>">
  <div class="mb-3">
    <labelclass="form-label">Product name</label>
    <input type="name" name="produit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$row['name']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" name="prix" class="form-control" id="exampleInputPassword1" value="<?=$row['price']?>">
  </div>

 
 <textarea name="img" id="" cols="30" rows="10">
    <?=$row['imageURL']?>"
 </textarea> <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
</body>
</html>
  