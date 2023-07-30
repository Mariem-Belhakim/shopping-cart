<?php

include("bd.php");

$id=$_GET['id'];

$sql = "delete from `products` where  id=$id";

// echo $sql;

// die();

if ($conn->query($sql) === TRUE) {
  // echo "New record deleted successfully";
//   echo "<a href=\"index.php\">Acceuil</a>";

header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();