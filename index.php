<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
<body>
<?php include("nav.php"); ?>
   
 
<div class="container my-5">
        <div class="row">
    <div class="col">
        <br>
        <br>
        <div class="container">
        <h1 class="text-info">Product List</h1>
        <br>
       

       <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">id</th>
    
        <th scope="col">Product Name</th>
       <th class="img">Price</th>
       <th >Image</th>
       <th>Actions</th>
      </tr>
      
    </thead>
    <tbody>
    <?php
      
            include_once('bd.php');
            // Retrieve products from the database
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            // Generate product cards based on the retrieved data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $price = $row['price'];
                    $image = $row['imageURL'];

                  echo "<tr>";
                  echo "<th scope=\"row\"> <i class=\"fa-regular fa-heart\"></i></th>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" .$name . "</td>";
                  echo "<td> $ " . $price . "</td>";
                  echo "<td> <img class=\"productIMG\" src=\"" . $image . "\"/></td>";
                  echo "<td> <a href=\"./update.php?id=".$row["id"] ."\" class=\" btn btn-primary\">Update</a>";
                  echo "<a  href=\"./delete.php?id=". $row["id"] . "\" class=\" btn btn-danger m-3\">Delete</a>" ;            
                 echo "</td>";
                  echo "</tr>";
                }
            } else {
                echo "No products found.";
            }

            // Close the database connection
            $conn->close();
            ?>
      <!-- <tr>
        <th scope="row"> <i class="fa-regular fa-heart"></i>
            </th>
        <td><img src="./images/3.png" width="100px"></td>
        <td>3</td>
        <td>100$</td>
        <td>200$</td>
      </tr>
      <tr>
        <th scope="row">  <i class="fa-regular fa-heart"></i>
             </th>
        <td><img src="./images/1.png" width="100px" alt=""></td>
        <td>3</td>
        <td>150$</td>
        <td>220$</td>
      </tr>
      <tr>
        <th scope="row"> <i class="fa-regular fa-heart"></i></i>
             </th>
        <td><img src="./images/2.png" width="90px"></td>
        <td>4</td>
        <td>80$</td>
        <td>130$</td>
      </tr> -->
    </tbody>
  </table>
          </div>
          </div>
  </div>

</body>
</html>