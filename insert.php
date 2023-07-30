<?php

include("bd.php");

$name=$_POST['produit'];
$prix=$_POST['prix'];
$img=$_POST['img'];

$sql = "INSERT INTO `products` (name, price, imageURL )
VALUES ('$name',$prix,'$img' )";

// echo $sql;

// die();

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  // echo "<a href=\"index.php\">Acceuil</a>";
  header("location:index.php");

} else {
  
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();