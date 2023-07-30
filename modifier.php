<?php

include("bd.php");

$id=$_POST['id'];
$name=$_POST['produit'];
$prix=$_POST['prix'];
$img=$_POST['img'];

$sql = "update `products` SET  name='$name', price=$prix, imageURL='$img' where  id=$id";

// echo $sql;

// die();

if ($conn->query($sql) === TRUE) {
//   echo "New record updated successfully";
//   echo "<a href=\"index.php\">Acceuil</a>";
header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();